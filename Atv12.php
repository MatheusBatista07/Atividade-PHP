<?php
    $usuario = [
        "Nome" => "Ana Luísa", 
        "Idade" => 22, 
        "Email" => "analuisadev@gmail.com"
    ];
foreach ($usuario as $key => $value) {
        echo $key ." : ". $value . "<br>";
    }
?>