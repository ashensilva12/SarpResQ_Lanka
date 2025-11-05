<x-app-layout>
    <div class="report-container">
        <link rel="stylesheet" href="{{ asset('css/report.css') }}">

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
</x-app-layout>
