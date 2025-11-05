<?php config(['app.name' => 'SarpResQ_Lanka']); ?>
@extends('layouts.bootstrap')
@section('brand')
  <span class="navbar-brand"><img src="{{ asset('images/logo.jpg') }}" alt="SarpResQ_Lanka" style="height:28px;object-fit:contain;" class="me-2">SarpResQ_Lanka</span>
@endsection

@section('title','Register')

@section('hero')
    <div style="display:none" aria-hidden="true"></div>
@endsection

@section('content')
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <i class="bi bi-person-plus-fill display-4 text-primary"></i>
                            <h4 class="mt-2 mb-0">Create an account</h4>
                            <p class="text-muted small mb-3">Join to report and track snake sightings in your area</p>
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3 input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Your full name" class="form-control @error('name') is-invalid @enderror">
                                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="you@example.com" class="form-control @error('email') is-invalid @enderror">
                                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input id="password" type="password" name="password" required placeholder="Choose a password" class="form-control @error('password') is-invalid @enderror">
                                @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 input-group">
                                <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                <input id="password_confirmation" type="password" name="password_confirmation" required placeholder="Confirm password" class="form-control">
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg">Register</button>
                            </div>
                        </form>

                        <hr class="my-4">
                        <div class="text-center small text-muted">Already registered? <a href="{{ route('login') }}">Sign in</a></div>
                    </div>
                </div>
            </div>
        </div>
@endsection
