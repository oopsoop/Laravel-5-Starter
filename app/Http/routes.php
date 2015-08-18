<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',function(){
    return redirect('home');
});
Route::get('home',array(
    'as' => 'home',
    'uses' => 'HomeController@index'
));

Route::post('setlocale','HomeController@setlocale');

Route::resource('cache','CacheController');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/emailexists','Auth\AuthController@getEmailExists');
Route::get('auth/activate','Auth\AuthController@getActivate');
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::post('auth/changepwd','UserController@update');

///OD密码管理路由
Route::controllers([
    //'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

//通知功能，用于演示分页
Route::resource('announcement','AnnouncementController');

///Captcha
Route::any('captcha', function()
{
    if (Request::getMethod() == 'POST')
    {
        $rules = ['captcha' => 'required|captcha'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()){
            echo '<p style="color: #ff0000;">Incorrect!</p>';
        }else{
            echo '<p style="color: #00ff30;">Matched :)</p>';
        }
    }

    $form = '<form method="post" action="captcha">';
    $form .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
    $form .= '<p>' . captcha_img() . '</p>';
    $form .= '<p><input type="text" name="captcha"></p>';
    $form .= '<p><button type="submit" name="check">Check</button></p>';
    $form .= '</form>';
    return $form;
});


// API  Route
$api = app('api.router');
$api->version('v1', ['middleware' => 'api.auth'],function ($api) {
    $api->get('home','App\Http\Controllers\AnnouncementController@index');
    $api->post('auth/register', 'App\Http\Controllers\Auth\AuthController@postRegister');
    $api->get('auth/login', 'App\Http\Controllers\Auth\AuthController@getLogin');
});
