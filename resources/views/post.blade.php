@extends('layouts.main')

@section('container')
    <article>
        <h2 class="mb-5">{{ $post["title"] }}</h2>
        {{ $post->body }}
    </article>
        <h1 class="mb-5">{{ $post["title"] }}</h1>

        <p>By. Salma in <a href="/categories/{{ $post->category->slug }}" class="text-info-emphasis">{{ $post->category->name }}></a></p>

        {!! $post->body !!}

    <a class="text-info-emphasis mb-3" href="/posts">Back to Article</a>
    <a class="text-secondary-emphasis mb-3" href="/posts">Back to Article</a>
@endsection