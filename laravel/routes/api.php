<?php

use Illuminate\Http\Request;

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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::resource('quote','QuoteController');

Route::post('/user/signup', 'UserController@signup');
Route::post('/user/signin', 'UserController@signin');
Route::get('/user', 'UserController@getAuthenticatedUser');
Route::put('/user/{id}', 'UserController@updateUser');
