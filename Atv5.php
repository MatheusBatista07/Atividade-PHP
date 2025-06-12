<?php

    $pntjog = 100;
    $qtdvit = 5;
    $qtdder = 7;
    $pesovit = 20;
    $pesoder = 15;
    $vlrfinal= $pntjog+($qtdvit*$pesovit)-($qtdder*$pesoder);

    echo"Pontuação inicial: " .$pntjog ."<br>";
    echo "Vitórias: ".$qtdvit ."<br>";
    echo "Derrotas: ".$qtdder ."<br>";
    echo "Pontuação Final: " . $vlrfinal ."<br>";
    

?>