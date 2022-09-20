<?php
/*
 * Para realizar este ejercicio copiar y renombrar el ejercicio02.
 * Nuestra zapatería pondrá rebajas. Hay que cambiar los precios de todos los productos.
 * La rebaja estará guardada en una variable y será un tanto por ciento. (20%, 50%,...) ejemplo: $rebaja = 20;
 * Por pantalla se imprimirán los productos con viejo y el precio nuevo,
 * los nuevos precios se guardarán en el array de precios (al finalizar el programa el array de precios quedará con los los precios nuevos)
 *
 *
 */
$precios = array(
    60,
    150,
    70,
    40,
    100
);
$productos = array(
    "Adidas",
    "Air Jordan",
    "Zapato de tacon",
    "Deportibas",
    "Botas tacon"
);

$rebajas= array(50,10,30,15,40);

for ($i = 0; $i < count($productos); $i ++) {
    echo $productos[$i] . ": ";
    echo "<br>Precio inicial: " . $precios[$i] . "€";
    
    $rebaja_precio = ( ($rebajas[$i] * $precios[$i]) /100);
   
    $nuevo_precio= $precios[$i]-$rebaja_precio;
    $precios[$i] =  $nuevo_precio; 
    echo "<br>Precio actual<br>";
    echo $productos[$i] . ": ";
    echo $precios[$i] . "€<br>";
}

?>