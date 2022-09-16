<?php 

/*
 * Hacer una página PHP que compruebe si el contenido de una variable es par o impar.
   Para ello realiza un formulario que pida un número. 

 */


    $num1 =rand(1,30);
    
    if ($num1% 2 == 0) {
        echo 'La variable es par';
    }else{
        echo 'La variable es impar';
    }

?>