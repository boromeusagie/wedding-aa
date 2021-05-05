<?php

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

Route::get('/', 'HomeController@index')->name('homepage');

Auth::routes();

Route::get('/home', 'AdminController@index')->name('home');
Route::get('/order', 'MenuController@showMenu')->name('order');
Route::get('/wear', 'MenuController@showWear')->name('wear');
Route::get('/{username}', 'Auth\LoginController@loginForm')->name('login.show');
// Route::post('/login', 'Auth\LoginController@login')->name('login');

// Route::group(
//     ['middleware' => 'auth'], function() {
//     }
// );
