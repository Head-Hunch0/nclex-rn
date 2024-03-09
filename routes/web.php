<?php

use App\Http\Controllers\PesapalController;
use App\Http\Middleware\CorsMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->middleware(CorsMiddleware::class);

Route::get('/testimonials', function() {
    return view('testimonials');
});
Route::get('/demo', function() {
    return view('demo');
});

// PesaPal API Endpoints

Route::match(['get', 'post'], '/payments', function (Request $request) {
    // Log the incoming data from Pesapal
    
    Log::info($request->all());

    // return redirect('https://meet.google.com/mkz-pkkf-ned');

    // You can handle the incoming data from Pesapal here
});

Route::post('/request-token', [PesapalController::class, 'submitOrderRequest2']);
// Route::post('/request-token', [PesapalController::class, 'submitOrderRequest2']);