<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/login.css')}}">
    <title>Login</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <img src="{{url('imagens/fundo/TaskL3.png')}}" alt="" class="imagemLogo">
            <h1>Task List</h1>
        </div>
        <div class="tituloNav">
            <h1>Login</h1>
        </div>
        <div class="feliz">
            <p>:D</p>
        </div>
        
    </nav>
    <div class="conteudo">
        <div class="login">
            <form action="/login" method="post" class="form">
                @csrf
                <h1>Login</h1>
                <p class="titulos">Email: </p>
                <input type="email" name="email" class="inpute" placeholder="Seu Email">
                <p class="titulos">Senha: </p>
                <input type="password" name="senha" class="inpute" placeholder="Sua Senha">

                @if(isset($erro))
                <p style="color:red;">{{ $erro }}</p>
                @endif
                <br>
                <input type="submit" value="Entrar!" class="entrar">
                <br>
                <a href="/cadastrar">nao tem conta? cadastre-se!</a>
            </form>
        </div>
    </div>
</body>

</html>