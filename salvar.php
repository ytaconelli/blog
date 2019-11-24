<?php

    include('conn.php');

    $usuario = $_POST['user'];
    $senha = $_POST['password'];
    $senha = md5($senha);

    $sql = "INSERT INTO usuarios (usuario, senha) VALUES ('$usuario', '$senha')";

    $conn->query($sql);

    header('Location: index.php');