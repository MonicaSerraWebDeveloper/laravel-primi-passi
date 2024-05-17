<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects - Primi Passi</title>
</head>
<body>
    <header>
        @foreach ($items as $item)
            <a href="{{ $item['url'] }}"><span>{{ $item['name'] }}</span></a>
        @endforeach
    </header>

    <main>
        <h2>Projects</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio at magni enim perspiciatis dicta pariatur facere praesentium a, similique minus fuga atque est culpa quibusdam minima officiis eveniet voluptatem unde!</p>
    </main>
</body>
</html>