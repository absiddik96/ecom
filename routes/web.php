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
Route::get('/admin', function () {
    return view('layouts.admin');
});

//........Pre registation like [public,corporate]
Route::get('/pre-register','Auth\RegisterController@preRegister')->name('preRegister');
Route::get('/c-register','Auth\RegisterController@corporateRegister')->name('corporateRegister');
Route::post('/c-register','Auth\RegisterController@corporateCreate')->name('corporateCreate');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
