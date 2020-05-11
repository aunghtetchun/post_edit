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

Route::view('/', 'welcome');

Auth::routes();
Route::get("/admin","HomeController@admin")->name("admin")->middleware("isAdmin");
Route::get("/access-denied",function (){
    return "access denied";
})->name("access.denied");
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/post','PostController');
Route::resource('/like','LikeController');

