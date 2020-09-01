<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Home Route
Route::get('/', 'HomeController@index');
Route::get('/login', 'AdminController@login');
Route::post('/login', 'AdminController@postlogin');
Route::get('/register', 'AdminController@register');
Route::post('/register', 'AdminController@postregister');
Route::get('/show/{article}', 'HomeController@show');

// Post Route
Route::prefix('/post')->group(function () {
    Route::post('/store', 'PostController@store');
    Route::get('/edit/{article}', 'PostController@edit');
    Route::post('/update/{article}', 'PostController@update');
});


// Admin / User Route
Route::prefix('/administrator')->group(function () {
    Route::get('/', 'AdminController@index')->name('allpost');
    Route::get('/create', 'AdminController@create')->name('create');
    Route::post('/logout', 'AdminController@logout');
    // Route::get('/edit/{article}', 'PostController@edit');
    Route::post('/delete', 'PostController@destroy')->name('deletepost');
    Route::get('/media', 'AdminController@media')->name('media');
});
