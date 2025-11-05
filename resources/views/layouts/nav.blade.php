<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SarpResQ Lanka')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
    <!-- Google Font: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    {{-- Navbar --}}
    <nav class="site-nav" aria-label="Main navigation">
        <div class="brand">
              <a href="{{ route('home') }}" class="brand-link">
                 <img src="{{ asset('images/logo.jpg') }}" alt="SarpResQ_Lanka" class="brand-logo">
                 <h1>SarpResQ Lanka</h1>
              </a>
        </div>
        <div class="menu">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('report-snake') }}">Report</a>
            <a href="/my-reports">My Reports</a>
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </div>
    </nav>

    {{-- Page Content --}}
    <main class="site-content container mx-auto p-6">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="site-footer">
        <div class="site-footer-inner">
            <p>&copy; {{ date('Y') }} SarpResQ Lanka | All Rights Reserved</p>
        </div>
    </footer>

</body>
</html>
