<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/perfilUsuario.css')}}">
    <title>Perfil usuario</title>
</head>
<body>
    <nav class="navbar">
        <div class="nomeUser">
            
            <h1>Bem vindo {{ session('usuario') }}!</h1>
            
        </div>
    </nav>

    <div class="conteudo">

    </div>
</body>
</html>