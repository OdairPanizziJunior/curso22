<?php

$array= [25, 10 ,8 ,6 ,9 ,63 ,45 ,87 ,68 ,10 ,15];
    //    0   1  2  3  4   5   6  7    8    9  10

$par = [];
$impar = [];

$resto = 0;

function separa ($array){
    $num_par = 0;
    $num_impar = 0;
    $i = 0;

    for($i = 0; $i < count($array); $i++){
        $resto = $array[$i] % 2;

            if($resto == 0){
                $par[$i] = $array[$i];
                $num_par++;
            } else {
                $impar[$i] = $array[$i];
                $num_impar++;
            }

    }

    foreach($array as $arrayI) {
        echo "$arrayI ";
    }

    echo "<pre>";
    echo "=====> ";
    print_r($par);
    echo "Quantidade de Pares = {$num_par}";

}

separa($array);