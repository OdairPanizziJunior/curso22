<?php

$resto  = 0;
$numero = [4, 2, 5, 1, 10, 100, 50, 3, 9, 12];
$contPares = 0;
$i = 0;



for ($contPares = 1; $contPares < 5; $contPares++) {
    
    $resto = $numero[$i] % 2;
    
    if($resto == 0){
        $contPares++;
    }
    
    $i++;

    
}
echo "Temos {$contPares} pares";