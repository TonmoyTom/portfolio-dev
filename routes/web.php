<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/','ContactController@show')->name('welcome');
Route::post('/contact', 'ContactController@contact')->name('contact');
Route::get('/contact', 'ContactController@form')->name('contact');

Auth::routes(['register' => false, 'password.request' => false, 'reset' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contactall', 'HomeController@contactall')->name('contact.all');
Route::get('/contactdetalis/{id}', 'HomeController@detalis')->name('contact.detalis');
Route::post('/contactdelete/{id}', 'HomeController@contactdelete')->name('contact.delete');


