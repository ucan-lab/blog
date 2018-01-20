@extends('layouts.one-column')

@section('content')
    <div id="posts-show">
        <h2 class="post-title">{{ $post->title }}</h2>
        <div class="post-info">posted on {{ $post->created_at }} by {{ $post->user->name }}</div>
        <div class="post-body">{{ mb_substr($post->body, 0, 120) }} ...</div>
    </div>
@endsection
