<?php  
/*
 * Definir una variable llamada “pares” y asignarle un valor booleano.
Si es true, mostrar en pantalla números pares del 1 al número aleatorio menor
 que 99 si se le ha asignado el valor FALSE a la variable pares en la pantalla tienen que aparecer los valores impares.

 */

    $pares;
    
    for($i =1;$i<=100;$i++){
        if($i%2 == 0){
            $pares= true;
        }else{
            $pares=false;
        }
        
        if($pares){
            echo 'El numero ' . $i . " es par<br>";
        }elseif(!$pares) {
            echo 'El numero ' . $i . " es inpar<br>";
        }
        
    }
   
?>