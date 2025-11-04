<?php config(['app.name' => 'SarpResQ_Lanka']); ?>
@extends('layouts.bootstrap')

@section('brand')
  <span class="navbar-brand"><img src="{{ asset('images/logo.jpg') }}" alt="SarpResQ_Lanka" style="height:28px;object-fit:contain;" class="me-2">SarpResQ_Lanka</span>
@endsection

@section('title','Sign in')

@section('content')
  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8">
      <div class="card">
        <div class="card-body p-4">
          <div class="text-center mb-3">
            <img src="{{ asset('images/logo.jpg') }}" alt="SarpResQ_Lanka" class="img-fluid mb-2" style="max-height:80px;">
            <h4 class="mt-2 mb-0">Welcome back</h4>
            <p class="text-muted small mb-3">Sign in to continue</p>
          </div>

          <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Username or Email (keeps name 'email' so backend works) -->
            <div class="mb-3 input-group">
              <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
              <input id="email" type="text" name="email" value="{{ old('email') }}" required autofocus placeholder="Username or email" class="form-control @error('email') is-invalid @enderror">
              @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="mb-3 input-group">
              <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
              <input id="password" type="password" name="password" required placeholder="Password" class="form-control @error('password') is-invalid @enderror">
              @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                <label class="form-check-label" for="remember_me">Remember me</label>
              </div>
              @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="small">Forgot your password?</a>
              @endif
            </div>

            <div class="d-grid">
              <button class="btn btn-primary btn-lg">Sign in</button>
            </div>
          </form>

          <hr class="my-4">
          <div class="text-center small text-muted">Don't have an account? <a href="{{ route('register') }}">Register</a></div>
        </div>
      </div>
    </div>
  </div>
@endsection