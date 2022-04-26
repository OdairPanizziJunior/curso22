<div align="center"> 
    <form action="teste.php" method="post">              
    Digite um Número: <input type="text" name="Num" size="5"> 
    <input type="submit" name="Submit" value="OK">
    </form>

<?php

$num = $_POST['Num'];


if(isset($_POST['Num'])){
   // $nums = $_POST['Num'];

        foreach($nums as $num){
            echo $num."<br>";
        }
    }


$num_individual = array_map('intval',explode(',', $num));
   
    echo "<pre>";
    print_r("Números digitados: {$num}");
    echo "</pre>";


$cont_par = 0;
$cont_impar = 0;

foreach($num_individual as $n){
    $resto = $n%2;
    if($resto == 0){
        $cont_par++;
    }else{
        $cont_impar++;
    }
}

echo "<br> Pares: ".$cont_par;
echo "<br> Ímpares: ".$cont_impar;

?>

</div>
