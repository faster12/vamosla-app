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

// landing page
Route::get('/', function () {
    return view('welcome');
});

// busca rotas de autenticação
Auth::routes();

// sem necessidade de login
Route::post('mail-register/{id}', 'MailRegister');

// middleware de login
Route::group(['middleware' => 'auth'], function(){
	Route::get('/home', 'HomeController@index')->name('home');
});