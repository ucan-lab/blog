@extends('layouts.app')

@section('frame')
    <div class="two-column">
        <div class="left">
            @yield('content')
        </div>
        <div class="right">
            @include('components.sidebar')
        </div>
    </div>
@endsection
