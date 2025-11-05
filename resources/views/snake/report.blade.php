<x-app-layout>
    <div>
        <h2>🐍 Report a Snake Sighting</h2>

        @if(session('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('snake.store') }}">
            @csrf
            <div>
                <label>Snake Type (if known)</label>
                <input type="text" name="snake_type" placeholder="e.g. Cobra">
            </div>

            <div>
                <label>Location *</label>
                <input type="text" name="location" required placeholder="Enter location">
            </div>

            <div>
                <label>Description</label>
                <textarea name="description" placeholder="Describe what happened"></textarea>
            </div>

            <button type="submit">Submit Report</button>
        </form>
    </div>
</x-app-layout>
