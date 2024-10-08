@extends('layouts.app')

@section('title', 'Login')

@section('content')
<form action="{{ route('login.attempt') }}" method="POST">
  @csrf
  <h1 class="h3 mb-3 fw-normal">{{ __('Please sign in') }}</h1>

  <div class="form-floating">
    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">{{ __('Email address') }}</label>
  </div>
  <div class="form-floating">
    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">{{ __('Password') }}</label>
  </div>

  <div class="form-check text-start my-3">
    <input class="form-check-input" type="checkbox" value="remember" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      {{ __('Remember me') }}
    </label>
  </div>
  <button class="btn btn-primary w-100 py-2" type="submit">{{ __('Sign in') }}</button>

  <!-- Add links for Forgot password and Register -->
  <div class="mt-3">
    <a href="#" class="text-body-secondary">{{ __('Forgot password?') }}</a>
    <a href="{{ route('register') }}" class="text-body-secondary float-end">{{ __('Register') }}</a>
  </div>
</form>
@endsection