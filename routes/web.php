<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/technology', function () {
    return view('technology');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/career', function () {
    return view('career');
});
