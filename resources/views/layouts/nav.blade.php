<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SarpResQ Lanka')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    {{-- Navbar --}}
    <nav class="bg-green-600 text-white p-4 flex justify-between">
        <h1 class="font-bold text-lg">🐍 SarpResQ Lanka</h1>
        <div>
            <a href="{{ route('home') }}" class="px-2 hover:underline">Home</a>
            <a href="/report-snake" class="px-2 hover:underline">Report</a>
            <a href="/my-reports" class="px-2 hover:underline">My Reports</a>
            <a href="/dashboard" class="px-2 hover:underline">Dashboard</a>
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
