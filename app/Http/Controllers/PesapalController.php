<?php

namespace App\Http\Controllers;

use App\Jobs\RedirectJob;
use App\Models\User;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;


use function PHPUnit\Framework\callback;

class PesapalController extends Controller
{

    public function makepurhcase(Request $request)
    {
        
        // Step 1: Request to get the access token
        $urlToken = 'https://pay.pesapal.com/v3/api/Auth/RequestToken';
        $requestDataToken = [
            'consumer_key' => 'oM1VHoqJPomoooL6Kc3hW6enGtSlNHuV',
            'consumer_secret' => 'S0HBz76TNtLNXMRpv+JQKHn5GAY='
        ];

        $responseToken = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ])->post($urlToken, $requestDataToken);

        // Extract the token from the response
        $token = $responseToken->json()['token'];

              // Generate a unique identifier
        $transactionId = 'transid ' . rand(1,10000);

            // Store the transaction ID and request data in the session
        $request->session()->put('transaction_id', $transactionId);
        // $request->session()->put('payment_request', $request->all());

        // Step 2: Request to submit the order
        $urlOrder = 'https://pay.pesapal.com/v3/api/Transactions/SubmitOrderRequest';

        $requestDataOrder = [
            "id" => 'NCLEX' . rand(1, 1000000),
            "currency" => "KES",
            "amount" => 1.00,
            "description" => "Payment for Nclex Subscription",
            // "callback_url" => "https://01fb-102-0-6-211.ngrok-free.app/payments?transaction_id=".$transactionId,
            "callback_url" => "https://nclex.kaya.co.ke/payments",
            "notification_id" => "fd36d388-7713-4da8-beb8-dd86b9f9d4ce",
            "billing_address" => [
                "email_address" => $request->email,
                "phone_number" => $request->number,
                "country_code" => "",
                "first_name" => $request->first_name,
                "middle_name" => "",
                "last_name" => $request->last_name,
                "line_1" => "",
                "line_2" => "",
                "city" => "",
                "state" => "",
                "postal_code" => null,
                "zip_code" => null
            ]
        ];

        
        $responseOrder = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $token // Use the token in the Authorization header
            ])->post($urlOrder, $requestDataOrder);
            
            $redir = $responseOrder->json()['redirect_url'];

      

            
            // $request->session()->put('payment_request', $request->all());
            $request->session()->put('payment_request_' . $transactionId, $request->all());

            return redirect(strval($redir));
            
    }


    public function loginuser(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/demo'); // Redirect to dashboard
        } else {
            // echo($credentials);
            // Authentication failed
            return back()->with(['message' => 'Invalid email or password']);
        }

    }

    public function getOrderStatus(Request $request)
    {
        // Extract the OrderTrackingId from the request
        $orderTrackingId = $request->OrderTrackingId;
        Log::info($orderTrackingId);
        Log::info($request);
            
        // Create user

        if($orderTrackingId){
            return redirect('/demo-active')->with('message', 'Welcome! Your account has been created successfully.');
        }

        // Here you can handle the data or return a response based on your requirements
        // For example, return the data to the client
        // echo response()->json($data);
    }


}
