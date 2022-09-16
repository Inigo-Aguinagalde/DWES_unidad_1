<?php 

/*
 * Realiza la suma desde un número (primerNum) hasta otro (ultimoum). Los valores de los dos parámetros se enviarán por GET.

 */

    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $suma=0;
    
    if($num1 <=$num2){
        $suma = $num1;
        for ($num1; $num1 < $num2; $num1++) {
            $suma = $suma + $num1;
           
        }
        echo "La segunda variables es mayor " . $suma;
    }elseif ($num1 >=$num2){
        $suma = $num2;
        for ($num2; $num2 < $num1; $num2++) {
            $suma = $suma + $num2;
        }
        echo "La primera variables es mayor " . $suma;
    }


?>