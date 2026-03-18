<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/home.css')}}">
    <title>Home</title>
</head>

<body>
    <nav class="navbar">
        <div class="nomeUser">
            <p>
            <h1>Bem vindo {{ session('usuario') }}!</h1>
            </p>
            <a href=""></a>
        </div>
    </nav>
        <div class="conteudo">
            <div class="formLateral">
                <form action="/enviarTarefa" method="post" class="formAction">
                    @csrf
                    <h1>Crie uma Tarefa!</h1>
                    <div class="divCampo">
                        <p>Titulo da Tarefa</p>
                        <input type="text" name="txTitulo" class="inpute" placeholder="Nome">
                    </div>
                    <div class="divCampo">
                        <p>Descrição da tarefa</p>
                        <input type="text" name="txDesc" class="inpute" placeholder="Email">
                    </div>
                    <div class="divCampo">
                        <p>prazo</p>
                        <input type="date" name="data" class="inpute">

                    </div>
                    <div class="divCampo">
                        <p>prioridade</p>
                        <input type="text" name="txPrioridade" class="inpute" placeholder="Email">
                    </div>
                    <br>
                    <div class="divBotao">
                        <input type="submit" value="enviar" class="botao">
                    </div>

                </form>

            </div>
            
            <div class="tarefas">
                @foreach($tarefa as $c)
                <div class="tarefa">
                <p>{{$c ->tituloTarefa}}</p>
                <hr>
                <p>{{$c ->descTarefa}}</p>
                <hr>
                <p>{{$c ->prazo}}</p>
                <hr>
                <p>{{$c ->prioridade}}</p>
                <hr>
                <p>{{$c ->status_id}}</p>
                </div>

                @endforeach
            </div>
            
            
        </div>
    
</body>

</html>