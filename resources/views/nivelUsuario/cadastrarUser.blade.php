<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/cadastrarUser.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <title>Cadastrar Usuario!</title>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="{{url('imagens/fundo/TaskL3.png')}}" alt="" class="imagemLogo">
            <h1>Task List</h1>
        </div>
        <div class="tituloNav">
            <h1>Cadastre-se</h1>
        </div>
        <div class="feliz">
            <p>:D</p>
        </div>
        
    </nav>
    <div class="conteudo">
    
    <div class="formulario">
        <form action="/enviarCadastro" method="post" class="formAction">
        @csrf 
            <div class="divCampo">
                <p>Digite Seu Nome</p>
                <input type="text" name="txNome" class="campo" placeholder="Nome">
            </div>
            <div class="divCampo">
                <p>Digite Seu Email</p>
                <input type="email" name="txEmail" class="campo" placeholder="Email">
            </div>
            <div class="divCampo">
                <p>Crie uma senha forte!</p>
                <input type="password" name="txSenha" class="campo" placeholder="Senha">
            </div>
            <br>
            <div class="divCampo">
                <input type="submit" value="enviar" class="botao">
            </div>
            <div class="divCampo">
                <a href="/login">Ja tem uma conta? Faça Login!</a>
            </div>
            <div class="divAviso">
                <p>Seja muito bem vindo!</p>
            </div>
            

        </form>
        
    </div>
    
    </div>
</body>
</html>