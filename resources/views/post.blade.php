@extends('layouts.main')

@section('container')
        <h1 class="mb-5">{{ $post->title }}</h1>
        <article>
                <h2>{{ $post->title }}</h2>

                <p>By. <a href="#" class="text-secondary text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-info-emphasis text-decoration-none">{{ $post->category->name }}</a></p>

                {!! $post->body !!}

        <p>By. Salma in <a href="/categories/{{ $post->category->slug }}" class="text-info-emphasis">{{ $post->category->name }}</a></p>

        {!! $post->body !!}

        <a class="text-secondary-emphasis" href="/posts">Back to Article</a>
                <a class="text-secondary-emphasis d-block mt-5" href="/posts">Back to Article</a>
        </article>
@endsection