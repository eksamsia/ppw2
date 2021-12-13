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

Auth::routes([
    'register' =>false,
    'reset' =>false,
]);

Route::get('/', function () {
    return view('welcome');
});

//katalog
Route::get('/katalog', 'KatalogController@index');
Route::get('/katalog/create', 'KatalogController@create')->name('katalog.create'); //named route untuk memudahkan dlm memanggil
Route::post('/katalog', 'KatalogController@store')->name('katalog.store'); 
Route::post('/katalog/delete/{id}', 'KatalogController@destroy')->name('katalog.destroy');
Route::post('/katalog/edit/{id}', 'KatalogController@edit')->name('katalog.edit');
Route::post('/katalog/update/{id}', 'KatalogController@update')->name('katalog.update');
Route::get('/katalog/search', 'KatalogController@search')->name('katalog.search');
Auth::routes();

//home
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@dashboard')->name('dashboard');

//userController
Route::get('/users', 'UserController@index');
Route::get('/users/create', 'UserController@create')->name('users.create'); //named route untuk memudahkan dlm memanggil
Route::post('/users', 'UserController@store')->name('users.store'); 
Route::post('/users/delete/{id}', 'UserController@destroy')->name('users.destroy');
Route::post('/users/edit/{id}', 'UserController@edit')->name('users.edit');
Route::post('/users/update/{id}', 'UserController@update')->name('users.update');

//Galeri
Route::get('/galeri', 'GaleriController@index');
Route::get('/galeri/create', 'GaleriController@create')->name('galeri.create'); //named route untuk memudahkan dlm memanggil
Route::post('/galeri', 'GaleriController@store')->name('galeri.store'); 
Route::post('/galeri/delete/{id}', 'GaleriController@destroy')->name('galeri.destroy');
Route::get('/galeri/edit/{id}', 'GaleriController@edit')->name('galeri.edit');
Route::post('/galeri/update/{id}', 'GaleriController@update')->name('galeri.update');

//list buku
Route::get('/list_katalog', 'KatalogController@list_katalog')->name('katalog.list_katalog');
Route::get('/list_katalog/detail_katalog/{id}', 'KatalogController@galkatalog')->name('katalog.detail_katalog');
Route::get('/list_katalog/{id}', 'KatalogController@likefoto')->name('likefoto');
// Route::get('/detail_katalog/{nama_produk}', 'KatalogController@komentar')->name('komentar');

// //komentar
// Route::get('/komentar', 'KomentarController@index')->name('katalog.komentar');
// Route::post('/list_katalog/detail_katalog/{id}', 'KomentarController@komentar')->name('katalog.komentar');