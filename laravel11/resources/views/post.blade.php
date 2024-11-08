<x-layout>
	<x-slot:title>{{ $title }}</x-slot:title>

	<article class="py-8 max-w-screen-md border-b border-gray-300">
		<h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
		<div class="text-base text-gray-500">
			<a href="#">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
		</div>
		<p class="my-4 font-light">{{ $post['body'] }}</p>
		<a href="/posts" class="font-medium text-blue-500 hover:underline">Go back &laquo;</a>
	</article>
</x-layout>
