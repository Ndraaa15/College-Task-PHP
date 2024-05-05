<!doctype html>
<html>

<head>
    <title>Praktikum Laravel Ke-2</title>
</head>

<body>
    <ul>
        @for($i = 0; $i < 5; $i++)
            <li>Ini adalah urutan ke-{{ $i + 1 }}</li>
        @endfor
    </ul>
</body>

</html>
