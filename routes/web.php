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

Route::get('/', function () {
    return view('welcome');
});
Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});
/* 
Route::get('blog', function () {
	return view('blog');
});
/* */

// route blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

Route::get('product', 'ProductController@index');
Route::get('/product/tambah','ProductController@tambah');
Route::post('/product/brand','ProductController@brand');
Route::get('/product/edit/{id}','ProductController@edit');
Route::post('/product/update','ProductController@update');
Route::get('/product/hapus/{id}','ProductController@hapus');

Route::get('/brand/{nama}', 'BrandController@index');
Route::get('/brand', 'BrandController@input');
Route::post('/brand/proses', 'BrandController@proses');

//route CRUD
//Route::get('/product','ProductController@index');

Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');