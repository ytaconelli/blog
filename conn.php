<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ti33";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Erro ao estabelecer uma conexão com o banco de dados");
}
else{"conexão bem sucedida";}