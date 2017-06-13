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
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


$api = app('api.router');
$api->version('v1', ['middleware' => 'api.auth'],function ($api) {
    $api->get('home','App\Http\Controllers\AnnouncementController@index');
    $api->post('auth/register', 'App\Http\Controllers\Auth\AuthController@postRegister');
    $api->get('auth/login', 'App\Http\Controllers\Auth\AuthController@getLogin');
});