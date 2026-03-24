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
        
            <h1>Login</h1>

    </nav>
    <div class="conteudo">
        <div class="login">
        <form action="/login" method="post">
            @csrf
            <h1>Login</h1>
            <p class="titulos" >Email: </p>
            <input type="email" name="email" class="inpute">
            <br>
            <p class="titulos">Senha: </p>
            <input type="password" name="senha" class="inpute">
            <br>
            @if(isset($erro))
                <p style="color:red;">{{ $erro }}</p>
            @endif
            <br>
            <input type="submit" value="Entrar!" class="entrar">

            <a href="/cadastrar">nao tem conta? cadastre-se!</a>
        </form>
        </div>
    </div>
</body>
</html>