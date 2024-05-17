<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About - Primi Passi</title>
</head>
<body>
    <header>
        @foreach ($items as $item)
            <span>{{ $item }}</span>
        @endforeach
    </header>

    <main>
        <h2>About</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio at magni enim perspiciatis dicta pariatur facere praesentium a, similique minus fuga atque est culpa quibusdam minima officiis eveniet voluptatem unde!</p>
    </main>

</body>
</html>