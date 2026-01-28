<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
@foreach ( $posts as $post)
<article class="py-8 max-w-screen-md border-b border-white-300">
    <a href="/posts/{{ $post['slug'] }}">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-white-900 hover:underline">{{ $post['title'] }}</h2>
    </a>
    <div>
        Writer
        <a href="/authors/{{ $post->author->username }} " class="text-base text-pink-500 hover:underline">{{ $post->author->name }}</a>
        By
        <a href="/authors/{{ $post->author->username }} " class="text-base text-pink-500 hover:underline">Incoming Category</a> | {{ $post->created_at->diffForHumans() }}
    </div>
    <p class="my-4 font-light">{{ Str::limit($post['body'], 50) }}</p>
    </p>
    <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
</article>
@endforeach
</x-layout>
