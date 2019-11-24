<?php
    if($resultado->num_rows > 0){
        while($linha = $resultado->fetch_assoc()){
            echo "<hr>";
            echo "<div>";
                echo "<h3>" . $linha['titulo'] . "</h3>";
                echo "<p>" . $linha['texto'] . "</p>";
            echo "</div>";
        }
    }else{
        echo "Nenhum resultado encontrado!";
    }