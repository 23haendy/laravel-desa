@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required autofocus>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>


        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Remember Me</label>
        </div>

        <button type="submit" class="btn btn-primary w-100">Login</button>

        <div class="text-center mt-3">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Forgot Password?</a>
            @endif
        </div>
        
        <div class="text-center mt-2">
            @if (Route::has('register'))
                <a href="{{ route('register') }}">Don't have an account? Register here</a>
            @endif
        </div>
    </form>
@endsection
