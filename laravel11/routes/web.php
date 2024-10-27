<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', array('title' => 'Home Page'));
});

Route::get('/about', function () {
    return view('about', array('nama' => 'Haidar Ali', 'title' => 'About Page'));
});

Route::get('/posts', function () {
	return view('posts', array('title' => 'Blog Page', 'posts' => array(
		array(
			'id' => 1,
			'slug' => 'judul-artikel-1',
			'title' => 'Judul Artikel 1',
			'author' => 'Haidar Ali',
			'body' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Adipiscing suscipit torquent erat semper maecenas urna ex lectus. Nec montes cras primis tincidunt suspendisse ex sociosqu. Aliquam torquent elementum aenean senectus vulputate donec et urna blandit.'
		),
		array(
			'id' => 2,
			'slug' => 'judul-artikel-2',
			'title' => 'Judul Artikel 2',
			'author' => 'Haidar Ali',
			'body' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Nisl amet posuere scelerisque vulputate convallis elementum tempus tellus. Per fringilla quis aliquam montes quisque.'
		)
	)));
});

Route::get('/posts/{slug}', function($slug) {
	$posts = array(
		array(
			'id' => 1,
			'slug' => 'judul-artikel-1',
			'title' => 'Judul Artikel 1',
			'author' => 'Haidar Ali',
			'body' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Adipiscing suscipit torquent erat semper maecenas urna ex lectus. Nec montes cras primis tincidunt suspendisse ex sociosqu. Aliquam torquent elementum aenean senectus vulputate donec et urna blandit.'
		),
		array(
			'id' => 2,
			'slug' => 'judul-artikel-2',
			'title' => 'Judul Artikel 2',
			'author' => 'Haidar Ali',
			'body' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Nisl amet posuere scelerisque vulputate convallis elementum tempus tellus. Per fringilla quis aliquam montes quisque.'
		)
	);

	$post = Arr::first($posts, function($post) use ($slug) {
		return $post['slug'] == $slug;
	});

	return view('post', array('title' => 'Single Post Page', 'post' => $post));
});

Route::get('/contact', function () {
    return view('contact', array('title' => 'Contact Page'));
});
