@extends('layouts.one-column')

@section('content')
    <div id="posts-show">
        <h2 class="post-title">{{ $post->title }}</h2>
        <div class="post-header">posted on {{ $post->created_at }} by {{ $post->user->name }}</div>
        <div class="post-body">{!! Markdown::convertToHtml($post->body) !!}</div>
        <div class="post-footer">
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">編集する</a>
        </div>
    </div>
@endsection
