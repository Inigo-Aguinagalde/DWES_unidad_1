<?php 
/*
 * En una zapatería sólo se venden 5 productos. 
 * Tengo los productos y los precios guardados en 2 arrays (en uno los productos y en otro los precios).
 *  Hay que visualizar cada producto con su precio.

 */


    $precios = array(60,150,70,40,100);
    $productos = array("Adidas","Air Jordan","Zapato de tacon","Deportibas","Botas tacon");

    for($i =0; $i < count($precios); $i++){
        echo $productos[$i] . ": ";
        echo $precios[$i] . "€<br>";
        
    }
    
?>