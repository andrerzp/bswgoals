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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/','LandingController@index');

// Route::get('/login', function () {
//     return view('LoginPage.login');
// })->name('login');

// Route::post('/postlogin','LoginController@postlogin')->name('postlogin');

route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard','DashboardController@dashboard_index');
    Route::get('/logout','LoginController@logout')->name('logout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
