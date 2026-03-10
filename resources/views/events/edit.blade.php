<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h1 class="mb-4">Edit Event</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('events.update', $event) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" value="{{ old('title', $event->title) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control">{{ old('description', $event->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Date</label>
            <input type="datetime-local" name="date" value="{{ old('date', $event->date->format('Y-m-d\\TH:i')) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Location</label>
            <input name="location" value="{{ old('location', $event->location) }}" class="form-control">
        </div>

        <button class="btn btn-primary">Save</button>
        <a href="{{ route('events.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
