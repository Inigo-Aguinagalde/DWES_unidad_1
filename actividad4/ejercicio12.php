<?php 
/*
 * Crea un array asociativo y ordenalo dependiendo del key y del valor. Para ello has de utilizar las funciones ksort y natsort.
 */


$arryAsociaivo = array("Joan "=>"Snchez","Adelaida "=> "Puente", "Candelaria" => "Tejada", "Azucena "=> "Agullo", "Luz Maria"=>"Calvo", "Benita "=> "Alba");

 ksort($arryAsociaivo);
 
 foreach ($arryAsociaivo as $key => $val) {
     echo "$key = $val\n" . "<br>";
 }
 
 natsort($arryAsociaivo);
 echo "<br>";
 foreach ($arryAsociaivo as $key => $val) {
     echo "$key = $val\n" . "<br>";
 }
 
 


?>