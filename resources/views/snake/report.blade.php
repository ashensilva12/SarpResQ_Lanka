<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snake Report</title>
    <link rel="stylesheet" href="{{ asset('css/report.css') }}">
</head>
<body>
    @section('brand')
        <span class="navbar-brand"><img src="{{ asset('images/logo.jpg') }}" alt="SarpResQ_Lanka" style="height:28px;object-fit:contain;" class="me-2">SarpResQ_Lanka</span>
    @endsection
    @extends('layouts.bootstrap')
    <div class="report-container">

        <h2>🐍 Report a Snake Sighting</h2>

        @if(session('success'))
            <div class="report-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('snake.store') }}">
            @csrf
            <div>
                <label class="report-label">Snake Type (if known)</label>
                <input class="report-input" type="text" name="snake_type" placeholder="e.g. Cobra">
            </div>

            <div>
                <label class="report-label">Location *</label>
                <input class="report-input" type="text" name="location" required placeholder="Enter location">
            </div>

            <div>
                <label class="report-label">Description</label>
                <textarea class="report-textarea" name="description" placeholder="Describe what happened"></textarea>
            </div>

            <button type="submit" class="report-btn">Submit Report</button>
            <div class="report-note">We appreciate accurate locations — add landmarks if possible.</div>
        </form>
    </div>
</body>
</html>