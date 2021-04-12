<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Ind_regController;

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

Route::get('/manage', function () {
    return view('manage');
});

Route::get('/tables', function () {
    return view('tables');
});


Route::get('/', function () {
    return view('welcome');
});

//Front-end routes
Route::get('/testindex', function () {
    return view('front.index');
});

Route::get('/individualreg', [Ind_regController::class, 'index']);
Route::post('/individualreg', [Ind_regController::class, 'store']);
Route::get('/testsingle', [Ind_regController::class, 'create']);



Route::get('/testgroup', function () {
    return view('front.group-registration');
});



//Back-end routes

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Hotel routes
Route::resource('hotel','App\Http\Controllers\HotelController');
Route::post('importhotel', 'App\Http\Controllers\HotelController@import')->name('importhotel');
Route::get('exporthotel', 'App\Http\Controllers\HotelController@export')->name('exporthotel');

//Hotel routes
Route::resource('lom','App\Http\Controllers\LomController');
Route::post('importlom', 'App\Http\Controllers\LomController@import')->name('importlom');
Route::get('exportlom', 'App\Http\Controllers\LomController@export')->name('exportlom');

//Page routes
Route::resource('page','App\Http\Controllers\PageController');
Route::post('importlom', 'App\Http\Controllers\LomController@import')->name('importlom');
Route::get('exportlom', 'App\Http\Controllers\LomController@export')->name('exportlom');

//Page routes
Route::resource('file','App\Http\Controllers\FileController');

