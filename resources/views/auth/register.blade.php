@extends('layout/main')

@section('title', 'Agricola - Register')

@section('content')
<section class="welcome_area bg-img background-overlay" style="background-image: url(/images/bg-img/bgpicture.jpeg);">
    <form action="{{ route('register') }}" class="login-form" method="POST">
        @csrf
        <h1>Register</h1>
        <div class="txtb">
            <input type="text" id="name" name="name" required autocomplete="name">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <span data-placeholder="Name"></span>
        </div>
        <div class="txtb">
            <input type="email" value="{{ old('email') }}" id="email" name="email" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <span data-placeholder="Email"></span>
        </div>
        <div class="txtb">
            <input type="password" id="password" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <span data-placeholder="Password"></span>
        </div>
        <div class="txtb">
            <input type="password" id="password-confirmation" name="password_confirmation" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <span data-placeholder="Password"></span>
        </div>
        <input type="submit" class="logbtn" value="Register">
        <div class="bottom-text">
            Already have an account? <a href="{{ route('login') }}">Sign In</a>
        </div>
    </form>
</section>
@endsection
