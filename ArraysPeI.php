<?php

$resto  = 0;
$numero = [4, 2, 5, 1, 10, 100, 50, 3, 9, 12];
$numeroI = [];
$numeroP = [];
$contPares = 0;
$contImpar = 0;

function par_impar_FOR ($numero) {
    $i = 0;
    $contPares = 0;
    $contImpar = 0;
    for ($i = 0; $i < count($numero); $i++) { //count - Conta o número de elementos de uma variável
   
    $resto = $numero[$i] % 2;
  
        if($resto == 0){
            $numeroP[$i] = $numero[$i];
            $contPares++;
        }else{
            $contImpar++;
        }    
    }

    echo "PAR OU IMPAR USANDO FOR";
    echo "<br>";
    echo "No Array Par Temos {$contPares} pares usando a função FOR";
    echo "<br>";
    echo "No Array Ímpar Temos {$contImpar} ímpares usando a função FOR"; 
}

function par_impar_WHILE ($numero){
    $i = 0;
    $contPares = 0;
    $contImpar = 0;
    while($i < count($numero)){
    
        $resto = $numero[$i] % 2;
        
        if($resto == 0){
            $contPares++;
        }else{
            $contImpar++;
        }
    $i++;    
}

    echo "PAR OU IMPAR USANDO WHILE";
    echo "<br>";
    echo "No Array Par Temos {$contPares} pares usando a função WHILE";
    echo "<br>";
    echo "No Array Ímpar Temos {$contImpar} ímpares usando a função WHILE"; 
}

function par_impar_DOWHILE($numero){
    $i = 0;
    $contPares = 0;
    $contImpar = 0;
    do {
        $resto = $numero[$i] % 2;
    
        if ($resto == 0) {
            $contPares++; // $contPares += 1;
        }else{
            $contImpar++;
        }
    
        $i++;
    } while ($i < count($numero));
    
    echo "PAR OU IMPAR USANDO DO-WHILE";
    echo "<br>";
    echo "No Array Par Temos {$contPares} pares usando a função DO-WHILE";
    echo "<br>";
    echo "No Array Ímpar Temos {$contImpar} ímpares usando a função DO-WHILE"; 
}
 
echo "<br>";
par_impar_FOR($numero);
echo "<br>";
echo "<br>";
par_impar_WHILE($numero);
echo "<br>";
echo "<br>";
par_impar_DOWHILE($numero);