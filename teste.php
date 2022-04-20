<form action="teste.php" method="post">               <!-- criar um formulário em HTML passando qual arquivo .php  -->
Digite um Número: <input type="text" name="Num" size="1"> 
<input type="submit" name="Submit" value="OK">
</form>

<?php

$i = 0;
$num = $_POST['Num'];

for($i = 0; $i <= 5; $i++){
    $array = array($num);
}
echo $num;

$array = array();
echo "<br>";
$array[] = $_POST['Num'];
print_r($array);

//  for($b = 1; $num = $_POST['Num'] <=5; $b++){
//      $numero[] = $num;
//      echo $b;
// }

// $numero[] = $num;

// $resto  = 0;
// //$numero = [4, 2, 5, 1, 10, 99, 50, 3, 9, 12];
// $contPares = 0;

// function pares ($numero) {
//     $i = 0;
//     for ($contPares = 1; $contPares <= 5; $contPares++) {
   
//     $resto = $numero[$i] % 2;
        
//         if($resto == 0){
//             $contPares++;
//         }    
//         $i++;   
//     }
//     echo "No Array Temos {$contPares} pares usando a função FOR";
// }
// pares($numero);