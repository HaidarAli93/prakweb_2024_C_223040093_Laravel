<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
	public static function all() {
		return array(
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
	}

	public static function find($slug) {
		//$post = Arr::first($posts, function($post) use ($slug) {
			//return $post['slug'] == $slug;
		//});
		$post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

		if (!$post) {
			abort(404);
		}

		return $post;
	}
}

?>
