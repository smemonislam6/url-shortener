@extends('layouts.app')

@section('title', 'Register')

@section('content')
<!-- Use a more descriptive title -->
<h1 class="h3 mb-3 fw-normal">{{ __('Create an Account') }}</h1>

<!-- Use a more semantic HTML structure -->
<form action="{{ route('register') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="name" class="form-label">{{ __('Name') }}</label>
    <input type="text" name="name" class="form-control" placeholder="john doe" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">{{ __('Email address') }}</label>
    <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">{{ __('Password') }}</label>
    <input type="password" name="password" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">{{ __('Confirm Password') }}</label>
    <input type="password" name="password_confirmation" class="form-control" required>
  </div>
  <button class="btn btn-primary w-100 py-2" type="submit">{{ __('Sign Up') }}</button>

  <!-- Add links for Forgot password and Register -->
  <div class="mt-3">
    <a href="{{ route('login.create') }}" class="text-body-secondary float-end">{{ __('Already have an account? Login') }}</a>
  </div>
</form>
@endsection