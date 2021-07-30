<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// http://localhost/tracepay/api/payments
Route::get('/payments', [PaymentController::class, 'index']); 

http://localhost/tracepay/api/newPayment
Route::post('/newPayment',  [PaymentController::class, 'store']); 

// Route::get('payments/{id}', 'PaymentController@show');
// Route::post('payments', 'PaymentController@store');
// Route::put('payments/{id}', 'PaymentController@update');
// Route::delete('payments/{id}', 'PaymentController@delete');