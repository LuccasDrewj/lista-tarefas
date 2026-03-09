<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/tarefa.css')}}">
    <title>View Tarefa</title>
</head>
<body>
    <div class="tarefas">
    @foreach($tarefa as $c)
        <p>{{$c->id}}</p>
        <h1>{{$c->tituloTarefa}}</h1>
        <p>{{$c->descTarefa}}</p>
        <p>{{$c->prazo}}</p>
        <p>{{$c->prioridade}}</p>
        <p>{{$c->status}}</p>
    @endforeach
    </div>
</body>
</html>