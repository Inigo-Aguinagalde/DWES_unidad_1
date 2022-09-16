<?php 

/*
 *  Diseñar un programa que determine la cantidad total a pagar por una llamada telefónica de acuerdo a las siguientes premisas:
    Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
    Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos.

 */

    $llamada = rand(1,30);
    $coste = 10;
    if ($llamada <3) {
       
        echo 'La llamada a costado ' . $coste . " centimos";
    }else {
        $llamada = $llamada -3;
        $coste = (5 * $llamada) + $coste;
        
        echo 'La llamada a costado ' . $coste . " centimos";
    }

?>