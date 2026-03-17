<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <nav class="navbar">
        <div class="nomeUser">
            <p><h1>Bem vindo {{ session('usuario') }}!</h1></p>
        </div>
    </nav>
</body>
</html>