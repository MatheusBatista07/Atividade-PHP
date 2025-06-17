<?php
    $mercado = [
        "Café" => 7, 
        "Macarrão" => 5.50, 
        "Leite" => 4,
    ];

    foreach ($mercado as $key => $value ) {
        echo"Produto: ". $key . ", Preço: " . $value . "<br>";
    }
?>