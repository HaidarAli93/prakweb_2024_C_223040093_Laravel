<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', array('nama' => 'Haidar Ali'));
});

Route::get('/blog', function () {
    return view('blog', array('judul' => 'Lorem Ipsum 1', 'isi' => 'Lorem ipsum dolor sit amet.'));
});

Route::get('/contact', function () {
    return view('contact', array('email' => 'haidar.223040093@mail.unpas.ac.id'));
});
