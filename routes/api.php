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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/letters', 'App\Http\Controllers\API\LetterController@index');

Route::get('/letters/{letter}', 'App\Http\Controllers\API\LetterController@show');

Route::post('/letters', 'App\Http\Controllers\API\LetterController@store');

Route::put('/letters/{letter}', 'App\Http\Controllers\API\LetterController@update');

Route::delete('/letters/{letter}', 'App\Http\Controllers\API\LetterController@destroy');

Route::post('/login', 'App\Http\Controllers\API\LoginController@login');

