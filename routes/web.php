<?php

use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', 'HomeController@index');
Route::get('/login', 'AdminController@login');
Route::post('/login', 'AdminController@postlogin');
Route::get('/kategori/{kategori}/{kategorinama}', 'HomeController@filterkategori');
Route::get('/register', 'AdminController@register');
Route::post('/register', 'AdminController@postregister');
Route::get('/show/{article}/{slug}', 'HomeController@show');
Route::get('/redaksi', 'HomeController@redaksi');
Route::get('/hubungi-kami', 'HomeController@hubungikami');
Route::get('/pedoman-media-siber', 'HomeController@pedomanmediasiber');
Route::get('/about', 'HomeController@about');

// Post Route
Route::prefix('/post')->group(function () {
    Route::post('/store', 'PostController@store');
    Route::get('/edit/{article}', 'PostController@edit');
    Route::post('/update/{article}', 'PostController@update');
    Route::post('/comment/send/{article}', 'PostController@comment');
});


// Admin / User Route
Route::prefix('/administrator')->group(function () {
    Route::delete('/{article}/delete', 'PostController@destroy');
    Route::get('/', 'AdminController@index')->name('allpost');
    Route::get('/create', 'AdminController@create')->name('create');
    Route::post('/logout', 'AdminController@logout');
    Route::get('/media', 'AdminController@media')->name('media');
});
