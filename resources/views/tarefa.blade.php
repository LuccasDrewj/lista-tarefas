<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Tarefa</title>
</head>
<body>
    
    @foreach($tarefa as $c)
        <p>{{$c->id}}</p>
        <p>{{$c->name}}</p>
        <p>{{$c->email}}</p>
    @endforeach

</body>
</html>