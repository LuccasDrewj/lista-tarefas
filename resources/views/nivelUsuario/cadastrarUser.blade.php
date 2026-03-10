<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/cadastrarUser.css')}}">
    <title>Cadastrar Usuario!</title>
</head>
<body>
    <nav class="navbar">
        <h1>Cadastre-se</h1>
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
                <input type="text" name="txEmail" class="campo" placeholder="Email">
            </div>
            <div class="divCampo">
                <p>Crie uma senha forte!</p>
                <input type="text" name="txSenha" class="campo" placeholder="Senha">
            </div>
            <br>
            <div class="divBotao">
                <input type="submit" value="enviar" class="botao">
            </div>

        </form>
    </div>
    
    </div>
</body>
</html>