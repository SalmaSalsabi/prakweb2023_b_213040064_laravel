@extends('layouts.main')

@section('container')
    <article>
        <h2 class="mb-3">{{ $post["title"] }}</h2>
        <p>{{ $post["body"] }}</p>
        <h2 class="mb-5">{{ $post->title }}</h2>
        {{ $post->body }}
    </article>

    <a class="text-info-emphasis" href="/posts">Back to Article</a>
    <a class="text-info-emphasis mb-3" href="/posts">Back to Article</a>
@endsection