<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registeradmin', function () {
    return view('auth.register');
});

Route::post('/registeradmin', 'UserController@register');

Route::get('/home', function() {
	if(Session::has('id_user') && Session::has('name_user')){
        return view('home')->with(['id' => Session::get('id_user'), 'name' => Session::get('name_user')]);
    }
    return redirect('/loginadmin');
});

Route::get('/loginadmin', function () {
    return view('auth.login');
});

Route::post('/loginadmin', 'UserController@login');

Route::get('/logoutadmin', 'UserController@logout');