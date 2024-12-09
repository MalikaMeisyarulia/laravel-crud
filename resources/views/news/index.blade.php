<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Ini News </h1>
    @foreach ($news as $row)
    <div>
        <img src="storage/{{$row->picture}}"/>
</div>
<div>
    <span>{{$row->title}}</span><br>
    <p>{{$row->content}}</p>
</div>
</div>
@endforeach

</body>
</html>