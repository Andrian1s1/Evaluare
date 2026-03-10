<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">Events</h1>
        <a href="{{ route('events.create') }}" class="btn btn-primary">Add Event</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($events->isEmpty())
        <div class="alert alert-info">No events found.</div>
    @else
        <table class="table table-bordered bg-white">
            <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{ $event->title }}</td>
                    <td>{{ Str::limit($event->description, 100) }}</td>
                    <td>{{ $event->date->format('Y-m-d H:i') }}</td>
                    <td>{{ $event->location }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('events.edit', $event) }}" class="btn btn-sm btn-secondary">Edit</a>
                            <form method="POST" action="{{ route('events.destroy', $event) }}" onsubmit="return confirm('Delete this event?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

</div>
</body>
</html>
