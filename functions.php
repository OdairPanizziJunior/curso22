<?php

$resto  = 0;
$numero = [4, 2, 5, 1, 10, 100, 50, 3, 9, 12];
$contPares = 0;

function paresFOR ($numero) {
    $i = 0;
    for ($contPares = 1; $contPares < 5; $contPares++) {
   
    $resto = $numero[$i] % 2;
        
        if($resto == 0){
            $contPares++;
        }    
        $i++;   
    }
    echo "No Array Temos {$contPares} pares usando a função FOR";
}

function paresWHILE($numero) {
    $i = 0;
    $contPares = 0;
    while($contPares < 5){
    
        $resto = $numero[$i] % 2;
        
        if($resto == 0){
            $contPares++;
        }
        
        $i++;
    
        
    }
    echo "No Array temos {$contPares} pares usando a função WHILE";
}

function paresDOWHILE($numero){
    $i = 0;
    $contPares = 0;
    do {
        $resto = $numero[$i] % 2;
    
        if ($resto == 0) {
            $contPares++; // $contPares += 1;
        }
    
        $i++;
    } while ($contPares < 5);
    
    echo "No Array temos {$contPares} pares usando a função DO-WHILE";
} 


echo "Data Hora Início " .date("d/m/Y H.i.s");
echo "<br>";
paresFOR($numero);
echo "<br>";
paresWHILE($numero);
echo "<br>";
paresDOWHILE($numero);
sleep(2);
echo "<br>";
echo "Data Hora Fim " .date("d/m/Y H.i.s");