<?php  
/*
 * Guarda en un array 10 numeros aleatorios entre 0 y 99 y sacar la minima.
 */

$numeros = array();

//rellenar array con numeros aleatorios
for($j=0;$j<10;$j++){
    $ramdom =  rand(0,99);
    $numeros[$j] = $ramdom;
}


$numeroMasPequeño=100;


for($i=0; $i< count($numeros);$i++){
    if ($numeroMasPequeño>$numeros[$i]) {
        $numeroMasPequeño = $numeros[$i];
    }
}

echo "Numero mas pequeño " . $numeroMasPequeño;

?>