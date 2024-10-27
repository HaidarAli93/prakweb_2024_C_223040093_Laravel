<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', array('title' => 'Home Page'));
});

Route::get('/about', function () {
    return view('about', array('nama' => 'Haidar Ali', 'title' => 'About Page'));
});

Route::get('/blog', function () {
    return view('blog', array('title' => 'Blog Page'));
});

Route::get('/contact', function () {
    return view('contact', array('title' => 'Contact Page'));
});
