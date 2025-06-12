<?php 

    $valor = 150;
    $desconto = 0.2;
    $clcdesc = $valor*$desconto;

    echo"O valor do produto: R$" .$valor .",00 <br>";
    echo "Desconto: 20% <br>";

    echo "Valor final: " .$valor-$clcdesc;
?>