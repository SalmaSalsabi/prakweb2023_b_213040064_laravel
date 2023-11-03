@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Halaman WPU Blog</h1>
    @foreach ($posts as $post)
    <article>
            <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>

@foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
            <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
            <p>By. <a href="#" class="text-secondary text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-info-emphasis text-decoration-none">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}" class="text-info text-decoration-none">Read More...</a>
    </article>
    @endforeach
@endforeach

@endsection
