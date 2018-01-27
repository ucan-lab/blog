@extends('layouts.one-column')

@section('content')
<div id="login">
    <h1>ログイン</h1>
    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
        </div>

        <div>
            <input id="password" type="password" class="form-control" name="password" required>
        </div>

        <div>
            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">
                Login
            </button>
        </div>
        <div>
            <a class="btn btn-link" href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>
        </div>
    </form>
</div>
@endsection
