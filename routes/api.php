<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:sanctum')->post('/quotes', [App\Http\Controllers\QuoteController::class, 'getUserQuotes']);

Route::post('register', [App\Http\Controllers\ApiRegisterController::class, 'register']);
Route::post('login', [App\Http\Controllers\ApiAuthController::class, 'login']);
Route::post('logout', [App\Http\Controllers\ApiAuthController::class, 'logout'])->middleware('auth:sanctum');
// Route::middleware(['auth:sanctum', 'force.json'])->group(function () {
//     Route::post('logout', [App\Http\Controllers\ApiAuthController::class, 'logout']);
//     // Other protected routes
// });
Route::post('save-quote', [App\Http\Controllers\ApiQuoteController::class, 'storeByRequest']);
Route::middleware('auth:sanctum')->get('user-info', [App\Http\Controllers\ApiUserInfoController::class, 'getUserInfo']);