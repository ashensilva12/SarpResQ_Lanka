<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SarpResQ Lanka')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    {{-- Navbar --}}
    <nav class="site-nav" aria-label="Main navigation">
        <div class="brand">
            <h1>🐍 SarpResQ Lanka</h1>
        </div>
        <div class="menu">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('report-snake') }}">Report</a>
            <a href="/my-reports">My Reports</a>
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </div>
    </nav>

    {{-- Page Content --}}
    <div class="container mx-auto p-6">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer class="bg-gray-800 text-white text-center p-3 mt-10">
        <p>&copy; {{ date('Y') }} SarpResQ Lanka | All Rights Reserved</p>
    </footer>

</body>
</html>
