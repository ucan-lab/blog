@extends('layouts.one-column')

@section('content')
    <div id="posts" class="cards">
        @foreach ($posts as $post)
            <div class="card">
                <h2 class="card-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
                <div class="card-info">posted on {{ $post->created_at }} by {{ $post->user->name }}</div>
                <div class="card-body">{{ mb_substr($post->body, 0, 120) }} ...</div>
            </div>
        @endforeach
    </div>
@endsection
