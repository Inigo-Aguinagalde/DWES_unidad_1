<?php 
/*
    Hacer una página PHP que tenga dos variables y nos indique si la suma de los números es mayor que el producto
    (resultado de la multiplicación) de ellos o al contrario: Ejemplo:
    Numero1=1; numero2=2 —> “ la suma es mayor que el producto”
    Numero1=1; numero2=2 —>“ el producto es mayor que la suma”
 
 
 */

    $num1 =  rand(1,10);
    $num2 =  rand(1,10);
    
    $sum = $num1 + $num2;
    $mult = $num1 * $num2;
    
    if ($sum>$mult) {
        echo 'La suma es mayor que el producto';
    }else{
        echo 'El producto es mayor que la suma';
    }

?>