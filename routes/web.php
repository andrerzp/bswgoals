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

route::group(['middleware' => ['auth','ceklevel:user,admin']], function () {
    Route::get('/dashboard','DashboardController@dashboard_index')->name('dashboard');
    Route::get('/buatpermohonan','DashboardController@buat_permohonan')->name('buatpermohonan');
    Route::get('/listpermohonan','DashboardController@list_permohonan')->name('listpermohonan');
    Route::get('/tracking','DashboardController@tracking_permohonan')->name('tracking');
    Route::get('/datadev','DashboardController@datadev')->name('datadev');
    Route::get('/monitoring','DashboardController@monitoring')->name('monitoring');
    Route::get('/layanan','DashboardController@layanan')->name('layanan');
    Route::get('/liburnasional','DashboardController@liburnasional')->name('liburnasional');
    Route::get('/masterplane','DashboardController@masterplane')->name('masterplane');
    Route::get('/prosesizin','DashboardController@prosesizin')->name('prosesizin');
    Route::get('/role','DashboardController@role')->name('role');
    Route::get('/users','DashboardController@users')->name('users');
    Route::get('/posisi','DashboardController@posisi')->name('posisi');
    Route::get('/datapemohon','DashboardController@datapemohon')->name('datapemohon');
    Route::get('/statistik','DashboardController@statistik')->name('statistik');
    Route::get('/helpdesk','DashboardController@helpdesk')->name('helpdesk');
    Route::get('/caridata','DashboardController@caridata')->name('caridata');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
