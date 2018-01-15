@extends('layouts.app')

@section('content')
    <div id="posts">
        <div class="left">
            <ul>
                @foreach ($posts as $post)
                    <li>{{ $post->title }}</li>
                @endforeach
            </ul>
        </div>
        <div class="right">
            @include('components.sidebar')
        </div>
    </div>
@endsection
