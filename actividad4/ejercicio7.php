<?php 
/*
 *Hasta ahora para visualizar el contenido de una variable hemos utilizado echo o print.
 * En el caso de los arrays se puede utilizar la orden print_r($array) para visualizar el contenido del array junto con su índice. 
 * Se debe realizar un programa que cree un array con 10 números aleatorios (números entre 1 y 200)
 * los imprima de las dos formas que aparecen en pantalla y después los imprima al revés. 

 
*/
$numeros = array();

//rellenar array con numeros aleatorios
for($j=0;$j<10;$j++){
    $ramdom =  rand(0,200);
    $numeros[$j] = $ramdom;
}

$arrayReverse = array_reverse($numeros);
print "Relacion de numeros aleatorios <br>";
for ($i = 0; $i < count($numeros); $i++) {
    
    print $numeros[$i] . " ";
  

}
echo "<br>";
echo "<br>";
print "Otra forma de visualizar los datos de un array <br>";
   
    print_r($numeros);
   
    echo "<br>";
    echo "<br>";

print "Relacion de numeros aleatorios al reves <br>";
for ($i = 0; $i < count($numeros); $i++) {


    echo $arrayReverse[$i] . " ";

}
print "<br>";



?>