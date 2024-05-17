<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primi passi</title>
</head>
<body>

    <header>
        @foreach ($items as $item)
            <span>{{ $item }}</span>
        @endforeach
    </header>

    <main>
        <h2>Laravel Primi Passi</h2>
        <a href="/about"><button>About</button></a>
    </main>
    
</body>
</html>