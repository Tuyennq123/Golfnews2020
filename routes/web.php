<?php
use Illuminate\Http\Request;
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

Route::group(['middleware' => 'auth'], function(){
    Route::get('/admin','AdminController@index')->name('homeadmin');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('video', function () {
    return view('video');
});
Route::get('category', function () {
    return view('category');
});

Route::get('home', function () {
    return view('home');
});

Route::get('cp-login', 'Auth\LoginController@loginForm')->name('login');
Route::post('cp-login', 'Auth\LoginController@postLogin');
Route::any('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('403', function(){
	return view('auth403');
})->name('auth.403');