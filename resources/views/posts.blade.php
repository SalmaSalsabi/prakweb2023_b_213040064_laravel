@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Halaman WPU Blog</h1>
    @foreach ($posts as $post)
        <article class="mb-5">
    <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
            </h2>
            <h5>By : {{ $post["author"] }}</h5>
            <p>{{ $post["bod@extends('layouts.main')

@section('container')
    <h1>Halaman WPU Blog</h1>
    <h1 class="mb-5">Halaman WPU Blog</h1>
    @foreach ($posts as $post)
    <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
            </h2>
            <p>{{ $post["body"] }}</p>
        </article>
    <article>
            <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
            <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach
@endsectiony"] }}</p>
        </article>
    @endforeach
@endsection