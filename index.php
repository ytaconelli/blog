<?php
    session_start();
    include('conn.php');

    if(!isset($_SESSION['login'])){
        $_SESSION['login'] = "false";
    }
    
    $sql = "SELECT *FROM blog ";
    $resultado = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <title>Blog</title>
</head>

<body>
    <div>
        <header>
            <h1>Sistema de Gerenciamento de Conteúdo</h1>
        </header>

        <nav>
        <?php
            if($_SESSION['login'] == "false"){
                echo "<a href='login.php'>Fazer Login/</a>";
                echo "<a href='cadastro.php'>Cadastrar</a>";
            }else{
                echo "<a href='sair.php'>Sair</a>";
            }   
        ?>
        </nav>

        <main>
            <div>
                <h3>Lorem ipsum 1</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nisi temporibus reiciendis enim perferendis non alias, consectetur sequi fuga est maiores odio in necessitatibus praesentium voluptate? Deleniti modi magni quas.</p>
            </div>
            <hr>
            <div>
                <h3>Lorem ipsum 2</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore facere autem voluptatibus eveniet omnis rem ducimus est, sapiente architecto alias necessitatibus nam saepe id atque eum illo harum at velit!</p>
            </div>
            <hr>
            <div>
                <h3>Lorem ipsum 3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi rerum quam quasi repellendus hic. Perspiciatis ullam fugiat quasi corrupti at, doloremque neque sed voluptate natus, veniam esse est ipsa sequi!</p>
            </div>
            <?php include('criarlinha.php');?>
        </main>

        <footer>
            <?php 
                if($_SESSION['login'] == "true"){
                echo "<h3><a href='adicionar.php'>Adicionar conteúdo</a></h3>";
                }
            ?>
        </footer>

    </div>
    
</body>
</html>