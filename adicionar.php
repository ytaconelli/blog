<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/postar.css">
    <title>Postagem</title>
</head>
<body>
    <div class="post">
        <header>
            <h1>Adicionar postagem</h1>
        </header>
        <main>
            <form action="postar.php" method="post">
                <div>
                    <label for="titulo">Titulo da postagem: </label>
                    <input type="text" id="titulo" class="titulo" name="titulo" placeholder="Digite o título da sua postagem" requeried>
                </div>
                <br>
                <div>
                    <label for="texto">Adicionar Conteudo:</label>
                </div>
                <div>
                    <textarea class="texto" id="texto" name="texto" placeholder="Digite o texto da sua postagem" required></textarea>
                </div>
                <br>
                <div>
                    <input type="submit" id="btn" value="Postar">
                </div>
            </form>
        </main>
        <br>
        <footer>
            <a href="index.php">Voltar a página inicial</a>
        </footer>
    </div> 
</body>
</html>