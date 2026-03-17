<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="conteudo">

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
        </form>
    </div>
</body>
</html>