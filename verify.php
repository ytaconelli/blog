<?php

    session_start();

    include('conn.php');

    $usuario = $_POST['user'];
    $senha = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";

    $resultado = $conn->query($sql);

    if($resultado->num_rows > 0){
        $linha = $resultado->fetch_assoc();
        if($linha['senha'] == md5($senha)){
            echo "Login efetuado com sucesso!";
            $_SESSION['login'] = "true";
            header('Location: index.php');
        }
        else{
            echo "Senha inválida!";
        }
    }

    else{
        "Usuário não cadastrado";
    }