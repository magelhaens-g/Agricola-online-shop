@extends('layout/main')

@section('title', 'Agricola - Login')

@section('content')
<section class="welcome_area bg-img background-overlay" style="background-image: url(/images/bg-img/bgpicture.jpeg);">
    <form action="{{ route('login') }}" class="login-form" method="POST">
        @csrf
        <h1>Login</h1>
        <div class="txtb">
            <input type="email" id="email" name="email" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <span data-placeholder="Email"></span>
        </div>
        <div class="txtb">
            <input type="password" id="password" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <span data-placeholder="Password"></span>
        </div>
        <input type="submit" class="logbtn" value="Login">
        <a href="{{ URL::previous() }}"><input type="button" class="cancelbtn" value="Cancel"></a>
        <div class="bottom-text">
            Don't have an account? <a href="{{ route('register') }}">Sign Up</a>
        </div>
    </form>
</section>
@endsection
