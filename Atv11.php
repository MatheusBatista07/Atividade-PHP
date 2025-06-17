<?php 
    $arr = [10, 5.50, 15, 2];
    $vlrtotal = 0;

    foreach ($arr as $number){
        $vlrtotal = $number + $vlrtotal;
    }

    echo "O valor total é: " . $vlrtotal;
?>