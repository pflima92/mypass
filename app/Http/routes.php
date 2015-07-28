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

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/system/{name?}', function ($name = null) {

    Log::info('Called System Search with Parameter : ' . $name);

    if($name == null){
        $name = 'Nenhum parametro encontrado';
    }
    return view('system/list')->with('name', $name);
});

