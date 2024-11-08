<?php

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', array('title' => 'Home Page'));
});

Route::get('/about', function () {
    return view('about', array('nama' => 'Haidar Ali', 'title' => 'About Page'));
});

Route::get('/posts', function () {
	$posts = Post::/*with(array('author', 'category'))->*/latest()->get();
	return view('posts', array('title' => 'Blog Page', 'posts' => $posts));
});

Route::get('/posts/{post:slug}', function(Post $post) {
	return view('post', array('title' => 'Single Post Page', 'post' => $post));
});

Route::get('/authors/{user:username}', function(User $user) {
	//$posts = $user->posts->load('category', 'author');
	return view('posts', array('title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts));
});

Route::get('/categories/{category:slug}', function(Category $category) {
	//$posts = $category->posts->load('category', 'author');
	return view('posts', array('title' => 'Articles in: ' . $category->name, 'posts' => $category->posts));
});

Route::get('/contact', function () {
    return view('contact', array('title' => 'Contact Page'));
});
