<?php 
/*
     Ejercicio 01: Hacer un programa que contenga dos números distintos en sendas variables y los sume.
     A continuación mostrar el resultado de la suma, la resta la multiplicación, divisioón y módulo.
     Guarde como ejercicio01.php.
 
 */

    
    $num1 = 5;
    $num2 = 3;
    $totalSum = $num1 + $num2;
    $totalRes = $num1 - $num2;
    $totalMul = $num1 * $num2;
    $totlDi = $num1 - $num2;
    $totalModulo = $num1%$num2;
    
    
    
    echo 'Total de la suma de las variables ' . $num1 .' y ' . $num2 . ' es ' . $totalSum;
    echo '<br>Total de la resta de las variables ' . $num1 .' y ' . $num2 . ' es ' . $totalRes;
    echo '<br>Total de la multiplicacion de las variables ' . $num1 .' y ' . $num2 . ' es ' . $totalMul;
    echo '<br>Total de la division de las variables ' . $num1 .' y ' . $num2 . ' es ' . $totlDi;
    echo '<br>Total de la modulo de las variables ' . $num1 .' y ' . $num2 . ' es ' . $totalModulo;

?>