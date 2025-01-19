<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/about_me', function () {
    return view('about_me');
});