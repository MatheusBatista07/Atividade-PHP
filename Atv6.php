<?php
$nota1 = 6;
$nota2 = 7;
$nota3 = 9;
$med = ($nota1 + $nota2 + $nota3) / 3;

echo "Média: " . $med ."<br>";
if ($med < 7) {
    echo "Reprovado!";
} else {
    echo "Aprovado!";
}
?>