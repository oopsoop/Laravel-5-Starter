<?php

Auth::routes();

Route::get('/',function(){
    return redirect('home');
});
Route::get('home',array(
    'as' => 'home',
    'uses' => 'HomeController@index'
));
Route::get('logout', 'Auth\LoginController@logout');
Route::post('setlocale','HomeController@setlocale');

Route::resource('cache','CacheController');

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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
