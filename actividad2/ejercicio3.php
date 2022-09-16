<?php 
/*
 * Ejercicio 03 : Define la constante PI y 
 * calcula el perímetro y superficie de un círculo cuyo radio es de 5cm. Guarde como ejercicio03.php
 */

     $pi= pi();
     $radio = 5;
     
     $perimetro = $pi * ($radio *2);
     $superficie = $pi * pow(5, 2);
     
     echo 'El perimetro es ' . $perimetro . ' y la superficie es ' . $superficie;
 
?>