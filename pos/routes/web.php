<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/pos', function () {
    return view('pos');
});

Route::get('/inventory', function () {
    return view('inventory');
});

Route::get('/reports', function () {
    return view('reports');
});

Route::get('/users', function () {
    return view('users');
});
