<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online khabar</title>
</head>
<body>
    <main>
        <header>
            <h1>{{$title}}</h1>
        </header>
    </main>
    @if($exp)
    <h1>this website is expired</h1>
    @endif
    <section>
        <ul>
            @foreach($news as $single_news)
            <h1><a href="#">{{$single_news}}</a></h1>
            @endforeach
        </ul>
    </section>
</body>
</html>