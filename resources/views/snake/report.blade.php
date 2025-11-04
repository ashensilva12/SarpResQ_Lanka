<x-app-layout>
    <div class="max-w-2xl mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-4">🐍 Report a Snake Sighting</h2>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('snake.store') }}">
            @csrf
            <div class="mb-3">
                <label class="block">Snake Type (if known)</label>
                <input type="text" name="snake_type" class="w-full border rounded p-2" placeholder="e.g. Cobra">
            </div>

            <div class="mb-3">
                <label class="block">Location *</label>
                <input type="text" name="location" class="w-full border rounded p-2" required placeholder="Enter location">
            </div>

            <div class="mb-3">
                <label class="block">Description</label>
                <textarea name="description" class="w-full border rounded p-2" placeholder="Describe what happened"></textarea>
            </div>

            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Submit Report</button>
        </form>
    </div>
</x-app-layout>
