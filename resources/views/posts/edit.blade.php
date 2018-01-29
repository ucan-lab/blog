@extends('layouts.one-column')

@section('content')
    <div id="posts-edit">
        <form method="post" action="{{ route('posts.update', $post->id) }}">
            {{ method_field('PUT') }}
            @include('posts._form')
        </form>
    </div>
@endsection
