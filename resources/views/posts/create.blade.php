@extends('layouts.one-column')

@section('content')
    <div id="posts-create">
        <form method="POST" action="{{ route('posts.store') }}">
            @include('posts._form')
        </form>
    </div>
@endsection
