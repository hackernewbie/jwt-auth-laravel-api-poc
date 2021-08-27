<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAuthController;

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
//});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth',
], function ($router) {

    Route::post('api-login', [App\Http\Controllers\ApiAuthController::class, 'me'])->name('api-login');
    Route::post('getToken', [App\Http\Controllers\ApiAuthController::class, 'getToken'])->name('getToken');
    Route::post('api-register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('api-register');
    Route::post('api-logout', [App\Http\Controllers\ApiAuthController::class, 'logout'])->name('api-logout');
    Route::post('api-refresh', [App\Http\Controllers\ApiAuthController::class, 'refresh'])->name('api-refresh');
    Route::post('api-me', [App\Http\Controllers\ApiAuthController::class, 'me'])->name('api-me');
});
