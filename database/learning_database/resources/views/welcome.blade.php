<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing</title>
</head>
<body>
    <ul>
        @foreach($arr as $ar)
        <li><a href="news/{{$ar['id']}}">{{$ar['id']}}</a></li>
        @endforeach
    </ul>
</body>
</html>