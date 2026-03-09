<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/users.css')}}">
    <title>View Users</title>
</head>
<body>
    <nav class="navbar">
        <h1>Usuarios!</h1>
    </nav>
    <div class="conteudo">
    @foreach($users as $c)
    <div class="usuarios">
        <p>ID: {{$c->id}}</p>
        <p> NOME: {{$c->name}}</p>
        <p>EMAIL: {{$c->email}}</p>
    </div>
    @endforeach
    </div>
</body>
</html>