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
/*
Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/welcome', function () {
    return view('welcome');
});
*/
/*Route::get('/','HomeController@home'); */

Route::get('/',function(){
    return view('adminlte.dashboard');
});

Route::get('/register', 'AuthController@register');

Route::post('/welcome2','AuthController@welcome');

Route::get('/master',function(){
    return view('adminlte.master');
});

Route::get('/items',function(){
    return view('items.index');
});

Route::get('/items/create',function(){
    return view('items.create');
});

Route::get('/datatable',function(){
    return view('adminlte.datatable');
});