@extends('layouts.main')

@section('content')
    .alpha { color: $purple; }
    .beta {
    color: $yellow-300;
    background-color: $indigo-900;
    }
    <article>
        <h2>{{ $post['title'] }}</h2>
        <p>{{ $post['body'] }}</p>
    </article>

    <a href="/blog">Back to Posts</a>
@endsection
