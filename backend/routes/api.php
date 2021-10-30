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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login', [\App\Http\Controllers\LoginController::class, "login"]);
Route::post('/logout', [\App\Http\Controllers\LoginController::class, "logout"]);
Route::get('/user/{id}', [\App\Http\Controllers\MeController::class, "index"]);
Route::group(['middleware' => ['auth:sanctum']], function () {
    //
});
