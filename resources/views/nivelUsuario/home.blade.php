<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/home.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <nav class="navbar">
        <div class="tituloPagina">
            <p>Lista de Tarefas</p>
        </div>
        <div class="nomeUser">

            <h1>Bem vindo {{ session('usuario') }}!</h1>

        </div>
        <div class="Perfil">
            <a href="/perfil" class="botaPerfil"><img src="/imagens/perfilIcone.png" alt="" class="imagemPerfil"></a>
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
                    <input type="text" name="txDesc" class="inpute" placeholder="Descrição">
                </div>
                <div class="divCampo">
                    <p>Prazo</p>
                    <input type="date" name="data" class="inpute">

                </div>
                <div class="divCampo">
                    <p>Prioridade</p>
                    <select name="txPrioridade" class="inpute">
                        <option value="baixa">Baixa</option>
                        <option value="media">Média</option>
                        <option value="alta">Alta</option>
                        <option value="expirada">Expirada</option>
                    </select>
                </div>
                <br>
                <div class="divBotao">
                    <input type="submit" value="Enviar" class="botao">
                </div>

            </form>
            <br>
            <hr>
            <br>
            

        </div>

        <div class="sessaotarefas">
            <div class="tituloSessaoTarefas">
                <h1>Suas Tarefas</h1>
                <hr>
            </div>
            
            <div class="tarefas">
                @foreach($tarefa as $c)
                <div class="tarefa">
                    <div class="topoTarefa">
                        <p>{{$c ->tituloTarefa}}</p>
                    </div>
                    <div class="descTarefa">
                        <p>{{$c ->descTarefa}}</p>
                    </div>
                    <div class="prazo">
                        <p>{{$c ->prazo}}</p>
                    </div>
                    <div class="prioridade">
                        <p>{{$c ->prioridade}}</p>
                    </div>
                    <div class="status">
                        <p>{{$c ->status_id}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


    </div>
</body>

</html>