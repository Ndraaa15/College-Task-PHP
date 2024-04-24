<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greet</title>
</head>

<body>
    @isset($name)
    <h1>Hello, {{ $name }}!</h1>
    @else
    <h1>Hello, Guest!</h1>
    @endisset
</body>

</html>
