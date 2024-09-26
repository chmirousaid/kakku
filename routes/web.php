<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/Reseptit', function () {
    return view('Reseptit');
});

Route::get('/Tarina', function () {
    return view('Tarina');
});
