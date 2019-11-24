<?php
    include('conn.php');
    
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];

    $sql = "INSERT INTO blog (titulo, texto) VALUES ('$titulo', '$texto')";
    
    $conn->query($sql);
    
    $conn->close();
    
    header("Location: index.php");
