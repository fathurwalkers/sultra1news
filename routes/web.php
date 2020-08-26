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


// Post Route 
Route::prefix('/post')->group(function () {
    Route::post('/store', 'PostController@store');
    // Route::get('/create', 'AdminController@create');
});


// Admin / User Route 
Route::prefix('/administrator')->group(function () {
    Route::get('/', 'AdminController@index');
    Route::get('/create', 'AdminController@create');
    Route::post('/logout', 'AdminController@logout');
});
