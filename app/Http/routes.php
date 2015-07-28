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

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', ['middleware' => 'auth', function() {
    return view('home');
}]);

Route::get('/home', ['middleware' => 'auth', function() {
    return view('home');
}]);

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

