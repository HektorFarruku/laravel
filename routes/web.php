<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/moduli', function () {
    return view('moduli');
});
Route::resource('users', 'UserController');
Route::resource('posts', 'PostController');
