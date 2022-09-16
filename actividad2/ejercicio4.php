<?php 

/*
 * Define tres variables y ordenar en orden ascendente.
 *  Despúes en orden descendente. Guarde como ejercicio04.php
 */


    $num1 = 4;
    $num2 = 2;
    $num3 = 8;
    $mayor;
    $medio;
    $bajo;
    
    //Calcular el en que posicion estaria la variable uno
   if ($num1 > $num2 && $num1> $num3 ) {
       $mayor = $num1;
   }elseif ($num1 > $num2 && $num1< $num3 ){
       $medio = $num1;
   }elseif ($num1 < $num2 && $num1> $num3 ) {
       $medio = $num1;
   }elseif ($num1 < $num2 && $num1 < $num3 ){
       $bajo = $num1;
   }
   
   //Calcular el en que posicion estaria la variable dos
   
   
   if ($num2 > $num1 && $num2> $num3 ) {
       $mayor = $num2;
   }elseif ($num2 > $num1 && $num2< $num3 ){
       $medio = $num2;
   }elseif ($num2 < $num1 && $num2> $num3 ) {
       $medio = $num2;
   }elseif ($num2 < $num1 && $num2 < $num3 ){
       $bajo = $num2;
   }
   
   //Calcular el en que posicion estaria la variable tres
   
   if ($num3 > $num1 && $num3> $num2 ) {
       $mayor = $num3;
   }elseif ($num3 > $num1 && $num3< $num2 ){
       $medio = $num3;
   }elseif ($num3 < $num1 && $num3> $num2 ) {
       $medio = $num3;
   }elseif ($num3 < $num1 && $num3 < $num2 ){
       $bajo = $num3;
   }
   
   echo $mayor . ' ' . $medio . ' ' . $bajo;
   
   echo '<br>' . $bajo . ' ' . $medio . ' ' . $mayor;
   

?>