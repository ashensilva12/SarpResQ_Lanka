<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    <!-- Google Font + Bootstrap CSS + Icons (CDN) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  {{-- Custom auth styles --}}
  <link rel="stylesheet" href="{{ asset('css/auth.css') }}">

    <style>
      :root{--bg-grad-1:#f8fafc;--bg-grad-2:#e9f0ff}
      body{font-family:'Inter',system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif; background: linear-gradient(180deg,var(--bg-grad-1) 0%, var(--bg-grad-2) 100%);}
      .navbar-brand{font-weight:700;letter-spacing:0.2px}
      .card{border:0;border-radius:12px;box-shadow:0 8px 30px rgba(16,24,40,0.08)}
      .form-control:focus{box-shadow:0 0 0 .15rem rgba(99,102,241,0.12)}
      .hero{padding:3rem 0}
      footer.site-footer{padding:2rem 0;background:transparent;color:#6b7280}
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        @hasSection('brand')
          @yield('brand')
        @else
          <a class="navbar-brand" href="{{ url('/') }}"><i class="bi bi-exclamation-triangle-fill text-warning me-2"></i>{{ config('app.name') }}</a>
        @endif
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu" aria-controls="navmenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            @guest
              <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
            @else
              <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('report-snake') }}">Report Snake</a></li>
              <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                  @csrf
                  <button class="btn btn-link nav-link" type="submit">Logout</button>
                </form>
              </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

    <main class="py-4">
      <div class="container">
        <div class="hero text-center">
          @hasSection('hero')
            @yield('hero')
          @else
            {{-- default light hero area --}}
            <h1 class="h3 text-muted">{{ config('app.name') }}</h1>
          @endif
        </div>
        @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if($errors->any())
          <div class="alert alert-danger">
            <ul class="mb-0">
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        @yield('content')
      </div>
    </main>

    <!-- Bootstrap JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
