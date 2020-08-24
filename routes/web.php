<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Home Route
Route::get('/', 'HomeController@index');


// Admin / User Route 
Route::prefix('/administrator')->group(function () {
    Route::get('/', 'AdminController@index');
    Route::get('/login', 'AdminController@login');
    Route::get('/register', 'AdminController@register');
    Route::get('/create', 'AdminController@create');
});
