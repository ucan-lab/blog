@extends('layouts.one-column')

@section('content')
    <div id="files" class="cards">
        @foreach ($files as $file)
            <div class="card">
                <h2 class="card-title"><a href="{{ route('files.show', $file->id) }}">{{ $file->title }}</a></h2>
                <div class="card-body">{{ mb_substr($file->body, 0, 120) }} ...</div>
            </div>
        @endforeach
    </div>
@endsection
