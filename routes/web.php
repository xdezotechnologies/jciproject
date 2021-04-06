<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AjaxController;
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

Route::get('/addhotel', function () {
    return view('hotel.addhotel');
});

Route::get('/viewhotel', function(){
    return view('hotel.viewhotel');
});

Route::get('/addlom', function () {
    return view('lom.addlom');
});

Route::get('/viewlom', function(){
    return view('lom.viewlom');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
