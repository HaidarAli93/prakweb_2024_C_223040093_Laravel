<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', array('title' => 'Home Page'));
});

Route::get('/about', function () {
    return view('about', array('nama' => 'Haidar Ali', 'title' => 'About Page'));
});

Route::get('/posts', function () {
	return view('posts', array('title' => 'Blog Page', 'posts' => Post::all()));
});

Route::get('/posts/{slug}', function($slug) {
	return view('post', array('title' => 'Single Post Page', 'post' => Post::find($slug)));
});

Route::get('/contact', function () {
    return view('contact', array('title' => 'Contact Page'));
});
