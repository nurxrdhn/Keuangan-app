<?php

use Illuminate\Support\Facades\Route;

// 👉 Route khusus sitemap.xml
Route::get('/sitemap.xml', function () {
    return response()->file(public_path('sitemap.xml'), [
        'Content-Type' => 'application/xml'
    ]);
});

// 👉 Homepage default
Route::get('/', function () {
    return view('welcome');
});
