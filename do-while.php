<?php

$resto  = 0;
$numero = [4, 2, 5, 1, 10, 100, 50, 3, 9, 12];
$contPares = 0;
$i = 0;

while($contPares < 5){
    
    $resto = $numero[$i] % 2;
    
    if($resto == 0){
        $contPares++;
    }
    
    $i++;

    
}
echo "No Array temos {$contPares} pares";