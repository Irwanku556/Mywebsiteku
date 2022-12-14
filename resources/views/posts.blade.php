@extends('layouts.main')

@section('content')
    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a>
            </h2>
            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach
@endsection
