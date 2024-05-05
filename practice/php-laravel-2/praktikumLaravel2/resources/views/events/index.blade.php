<!doctype html>
<html>

<head>
    <title>Events - Praktikum Laravel Ke-2</title>
</head>

<body>
    <h1>Events</h1>
    <ul>
        @forelse($events as $event)
        <li>{{ $event->location }} - {{ $event->name }}</li>
        @empty
        <li>Belum ada event.</li>
        @endforelse
    </ul>
</body>

</html>
