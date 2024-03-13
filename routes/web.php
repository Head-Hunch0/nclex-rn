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
Route::get('/demo-active', function() {
    return view('demo-active');
});
Route::get('/login', function() {
    return view('login');
});

// PesaPal API Endpoints

Route::match(['get', 'post'], '/payments', [PesapalController::class, 'getOrderStatus']);

Route::post('/payment-initiate', [PesapalController::class, 'makepurhcase']);
Route::post('/log-in', [PesapalController::class, 'loginuser']);
