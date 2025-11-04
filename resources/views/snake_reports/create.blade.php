@extends('layouts.bootstrap')

@section('title','Report Snake')

@section('content')
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center mb-3">
            <i class="bi bi-geo-alt-fill display-5 text-danger me-3"></i>
            <div>
              <h4 class="mb-0">Report a snake sighting</h4>
              <p class="text-muted small mb-0">Provide location and details so local teams can respond.</p>
            </div>
          </div>

          <form method="POST" action="{{ route('snake.store') }}">
            @csrf

            <div class="mb-3 input-group">
              <span class="input-group-text"><i class="bi bi-hash"></i></span>
              <input id="snake_type" name="snake_type" class="form-control" required placeholder="Type (e.g. Cobra)" value="{{ old('snake_type') }}">
            </div>

            <div class="mb-3 input-group">
              <span class="input-group-text"><i class="bi bi-geo"></i></span>
              <input id="location" name="location" class="form-control" required placeholder="Location (address or coordinates)" value="{{ old('location') }}">
            </div>

            <div class="mb-3">
              <label class="form-label" for="description">Description</label>
              <textarea id="description" name="description" class="form-control" rows="4" placeholder="Any extra details (time, behaviour, nearby people or animals)">{{ old('description') }}</textarea>
            </div>

            <div class="mb-3">
              <label class="form-label" for="status">Status</label>
              <select id="status" name="status" class="form-select">
                <option value="pending"{{ old('status')=='pending' ? ' selected' : ''}}>Pending</option>
                <option value="in_progress"{{ old('status')=='in_progress' ? ' selected' : ''}}>In progress</option>
                <option value="resolved"{{ old('status')=='resolved' ? ' selected' : ''}}>Resolved</option>
              </select>
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <small class="text-muted">You will be notified when status changes.</small>
              <button class="btn btn-success">Submit report</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
