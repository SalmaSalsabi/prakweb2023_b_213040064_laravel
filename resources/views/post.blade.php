@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post["title"] }}</h2>
        <h5>{{ $post["author"] }}</h5>
        <h2 class="mb-3">{{ $post["title"] }}</h2>
        <p>{{ $post["body"] }}</p>
    </article>

    <a class="text-info-emphasis" href="/blog">Back to Article</a>
    <a class="text-info-emphasis" href="/posts">Back to Article</a>
@endsection