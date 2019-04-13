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


Route::get('/theme2',function(){
  return view('theme2');
})->name('admin');

Auth::routes();
Route::middleware('auth')->prefix('admin')->group(function(){
  Route::get('/','DashboardController@index')->name('dashboard');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/en', 'HomeController@indexEn')->name('home-en');

Route::get('/proyecto/eames-lounge-restoration','ProjectsController@eamesLounge');

