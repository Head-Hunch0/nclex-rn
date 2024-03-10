<?php

namespace App\Http\Controllers;

use App\Jobs\RedirectJob;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

use function PHPUnit\Framework\callback;

class PesapalController extends Controller
{
    //

    // $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJodHRwOi8vc2NoZW1hcy5taWNyb3NvZnQuY29tL3dzLzIwMDgvMDYvaWRlbnRpdHkvY2xhaW1zL3VzZXJkYXRhIjoiOTM1NGQyY2UtYmJhYi00MDBjLWIzZjMtZGU4Yjk3NDg4ZTM1IiwidWlkIjoib00xVkhvcUpQb21vb29MNktjM2hXNmVuR3RTbE5IdVYiLCJuYmYiOjE3MDkzNTMwNjQsImV4cCI6MTcwOTM1MzM2NCwiaWF0IjoxNzA5MzUzMDY0LCJpc3MiOiJodHRwOi8vcGF5LnBlc2FwYWwuY29tLyIsImF1ZCI6Imh0dHA6Ly9wYXkucGVzYXBhbC5jb20vIn0.KAYC6Q9B_gnahAWY8jtvlBjjA3fL9i40qtYL2QGkvFo';
    function requestPesapalToken()
    {
        $url = 'https://pay.pesapal.com/v3/api/Auth/RequestToken';
        // $url = 'https://cybqa.pesapal.com/pesapalv3/api/Auth/RequestToken';

        $requestData = [
            'consumer_key' => 'oM1VHoqJPomoooL6Kc3hW6enGtSlNHuV', // Replace 'xxx' with your actual consumer key
            'consumer_secret' => 'S0HBz76TNtLNXMRpv+JQKHn5GAY=' // Replace 'xxx' with your actual consumer secret
        ];

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ])->post($url, $requestData);

        dd($response->json());
    }
    function requestPesapalTokens()
    {
        $url = 'https://pay.pesapal.com/v3/api/URLSetup/GetIpnList';
        // $url = 'https://cybqa.pesapal.com/pesapalv3/api/Auth/RequestToken';


        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJodHRwOi8vc2NoZW1hcy5taWNyb3NvZnQuY29tL3dzLzIwMDgvMDYvaWRlbnRpdHkvY2xhaW1zL3VzZXJkYXRhIjoiOTM1NGQyY2UtYmJhYi00MDBjLWIzZjMtZGU4Yjk3NDg4ZTM1IiwidWlkIjoib00xVkhvcUpQb21vb29MNktjM2hXNmVuR3RTbE5IdVYiLCJuYmYiOjE3MDkzNTYwNzEsImV4cCI6MTcwOTM1NjM3MSwiaWF0IjoxNzA5MzU2MDcxLCJpc3MiOiJodHRwOi8vcGF5LnBlc2FwYWwuY29tLyIsImF1ZCI6Imh0dHA6Ly9wYXkucGVzYXBhbC5jb20vIn0.L7I8lZDcYCc8ABfAwLYbXHvbgVGlvQVj-bRNNdVfigo'
        ])->get($url);

        dd($response->json());
    }

    function registerIPNUrl()
    {
        $url = 'https://pay.pesapal.com/v3/api/URLSetup/RegisterIPN';
        // $url = 'https://cybqa.pesapal.com/pesapalv3/api/URLSetup/RegisterIPN';

        $requestData = [
            'url' => 'https://51a1-102-0-6-211.ngrok-free.app/payments',
            'ipn_notification_type' => 'GET'
        ];

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJodHRwOi8vc2NoZW1hcy5taWNyb3NvZnQuY29tL3dzLzIwMDgvMDYvaWRlbnRpdHkvY2xhaW1zL3VzZXJkYXRhIjoiOTM1NGQyY2UtYmJhYi00MDBjLWIzZjMtZGU4Yjk3NDg4ZTM1IiwidWlkIjoib00xVkhvcUpQb21vb29MNktjM2hXNmVuR3RTbE5IdVYiLCJuYmYiOjE3MDkzNTQ5MjIsImV4cCI6MTcwOTM1NTIyMiwiaWF0IjoxNzA5MzU0OTIyLCJpc3MiOiJodHRwOi8vcGF5LnBlc2FwYWwuY29tLyIsImF1ZCI6Imh0dHA6Ly9wYXkucGVzYXBhbC5jb20vIn0.DSMwXmBYUo_GM2AoQ9mi3s2NMWhHSuDyMf2LYEvjpa8'
        ])->post($url, $requestData);

        dd($response->json());
        return $response->json();
    }

    // ipn_id = 'fd36d388-7713-4da8-beb8-dd86b9f9d4ce'

    public function requestToken()
    {
        // Define the Pesapal API endpoint
        $pesapalAPIEndpoint = "https://cybqa.pesapal.com/pesapalv3/api/Auth/RequestToken";

        // Define your consumer key and consumer secret
        $consumerKey = "oM1VHoqJPomoooL6Kc3hW6enGtSlNHuV";
        $consumerSecret = "S0HBz76TNtLNXMRpv+JQKHn5GAY=";

        // Define the request data
        $requestData = [
            'consumer_key' => 'oM1VHoqJPomoooL6Kc3hW6enGtSlNHuV',
            'consumer_secret' => 'S0HBz76TNtLNXMRpv+JQKHn5GAY='
        ];

        // Define the request options
        $requestOptions = [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => 'Basic ' . base64_encode($consumerKey . ':' . $consumerSecret),
            ],
            'body' => json_encode($requestData)
        ];

        // Send the request to Pesapal API
        $response = Http::post($pesapalAPIEndpoint, $requestOptions);

        // Get the response data
        $responseData = $response->json();

        // Handle the response data here
        dd($responseData);
    }


    public function submitOrderRequest()
    {
        // Define the Pesapal API endpoint
        $pesapalAPIEndpoint = 'https://cybqa.pesapal.com/pesapalv3/api/Transactions/SubmitOrderRequest';

        // Define the request data
        $requestData = [
            "id" => "TEST1515111110",
            "currency" => "KES",
            "amount" => 10.00,
            "description" => "Payment description goes here",
            "callback_url" => "https://8696-196-201-231-254.ngrok-free.app/payments",
            "notification_id" => "e53d4ff4-1a44-48da-b811-dd87deea8f1e",
            "billing_address" => [
                "email_address" => "john.doe@example.com",
                "phone_number" => null,
                "country_code" => "",
                "first_name" => "John",
                "middle_name" => "",
                "last_name" => "Doe",
                "line_1" => "",
                "line_2" => "",
                "city" => "",
                "state" => "",
                "postal_code" => null,
                "zip_code" => null
            ]
        ];

        // Define the request options
        $requestOptions = [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
            'body' => json_encode($requestData),
        ];

        // Send the request to Pesapal API
        $response = Http::post($pesapalAPIEndpoint, $requestOptions);

        // Handle the response here
        return $response->json();
    }


    public function submitOrderRequest2(Request $request)
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

        // Step 2: Request to submit the order
        $urlOrder = 'https://pay.pesapal.com/v3/api/Transactions/SubmitOrderRequest';

        $requestDataOrder = [
            "id" => 'NCLEX' . rand(1, 1000000),
            "currency" => "KES",
            "amount" => 1.00,
            "description" => "Payment for Nclex Subscription",
            "callback_url" => "http://nclex.kaya.co.ke/payments",
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

        Log::info($requestDataOrder);
        // Extract the redirect URL from the response

        Log::info($responseOrder);

        $redir = $responseOrder->json()['redirect_url'];

        return redirect(strval($redir));
        
    }

    public function confirmorder($redir,$token)
    {
        // Append the $redir value to the status URL
        $statusUrl = 'https://pay.pesapal.com/v3/api/Transactions/GetOrderByTrackingId?orderTrackingId='.($redir);
        Log::info($statusUrl);

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $token // Use the token in the Authorization header
        ])->get($statusUrl);

        // Handle the response
        $data = $response->json();

        // Here you can handle the data or return a response based on your requirements
        Log::info($data);
    }

}
