<?php

use Illuminate\Support\Facades\Route;

Route::get('/googleba37d536d4ece2d3.html', function () {
    return response('google-site-verification: googleba37d536d4ece2d3.html', 200)
        ->header('Content-Type', 'text/plain');
});

Route::get('/', function () {
    return view('welcome');
});
