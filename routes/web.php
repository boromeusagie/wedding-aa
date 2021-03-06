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

Route::post('/comment', 'HomeController@storeComment')->name('comment-post');
Route::get('/order', 'MenuController@showMenu')->name('order');
Route::post('/order', 'MenuController@orderMenu')->name('order-post');
Route::post('/mua', 'MenuController@storeMua')->name('mua-store');
Route::post('/attend', 'MenuController@submitAttend')->name('submit-attend');
Route::get('/wear', 'MenuController@showWear')->name('wear');
Route::get('/user-excel-export', 'HomeController@download')->name('user.export');
Route::get('/{username}', 'Auth\LoginController@loginForm')->name('login.show');

Route::group([
    'prefix' => 'admin'
], function() {
    Route::get('', 'AdminController@dashboard')->name('admin-dashboard');
    Route::get('user', 'AdminController@userIndex')->name('admin-user');
    Route::post('user', 'AdminController@userStore')->name('admin-user-store');
    Route::post('user/{id}/update', 'AdminController@userUpdate')->name('admin-user-update');
    Route::delete('user/{id}/delete', 'AdminController@userDelete')->name('admin-user-delete');
    Route::get('menu', 'AdminController@orderIndex')->name('admin-menu');
    Route::get('comment', 'AdminController@commentIndex')->name('admin-comment');
    Route::delete('comment/{id}/delete', 'AdminController@commentDelete')->name('admin-comment-delete');
});

