<?php 
/*
 * Definir un número en una variable  y decir a qué nota le corresponde.
    Entre 1 y 4,9: suspenso
    Entre 5 y 5,9: suficiente
    Entre 6 y 6,9: bien
    Entre 7 y 8,9: muy bien
    Entre 9 y 10: sobresaliente
    Si no ERROR.

 */


    $nota = rand(1,10);
    
    
    if ($nota<4.9) {
        echo 'Suspenso';
    }elseif ($nota>=5 && $nota <5.9){
        echo 'Suficiente';
    }elseif ($nota>=6 && $nota <6.9){
        echo 'Bien';
    }elseif ($nota>=7 && $nota <8.9){
        echo 'Muy Bien';
    }elseif ($nota>=9 && $nota <=10){
        echo 'Sobresaliente';
    }
    
    
?>