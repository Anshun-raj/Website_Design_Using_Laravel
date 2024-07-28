<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('header');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/contact', function () {
    return view('contact');
});


