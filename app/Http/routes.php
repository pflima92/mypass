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

// Auth routes...
Route::get('/', 'Auth\AuthController@getLogin');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::delete('account/inactive',  array(
    'uses' => 'Manager\ProfileController@inactive',
    'as' => 'account.inactive'
));

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('password/reset', array(
    'uses' => 'Auth\PasswordController@remind',
    'as' => 'password.remind'
));

Route::post('password/reset', array(
    'uses' => 'Auth\PasswordController@request',
    'as' => 'password.request'
));

Route::get('password/reset/{token}', array(
    'uses' => 'Auth\PasswordController@reset',
    'as' => 'password.reset'
));

Route::post('password/reset/{token}', array(
    'uses' => 'Auth\PasswordController@update',
    'as' => 'password.update'
));

Route::resource('password', 'Manager\PasswordManagerController');
Route::resource('dashboard', 'Manager\PasswordManagerController');
Route::resource('home', 'Manager\PasswordManagerController');
Route::resource('profile', 'Manager\ProfileController');


/*

Route::get('/login', function () {
    return view('login');
});

Route::get('/system/{name?}', function ($name = null) {

    Log::info('Called System Search with Parameter : ' . $name);

    if($name == null){
        $name = 'Nenhum parametro encontrado';
    }
    return view('system/list')->with('name', $name);
});*/

