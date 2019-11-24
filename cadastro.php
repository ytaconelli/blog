<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Cadastro</title>
</head>
<body>
    
    <div>
        <header><h1>Cadastro</h1></header>
        <main>
            <form action="salvar.php" method="post">
                <div>
                    <label for="username">Usuário: </label>
                    <input type="text" name="user" id="username" placeholder="Digite seu usuário">
                </div>
                <div>
                    <label for="password">Senha: </label>
                    <input type="password" name="password" id="password" placeholder="Digite sua senha">
                </div>
                <div>
                    <input id="enviar" type="submit" value="Login">
                </div>
            </form>
        </main>
    </div>

</body>
</html>