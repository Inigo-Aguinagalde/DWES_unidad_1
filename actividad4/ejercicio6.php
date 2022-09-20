<?php 

//Guarda en un array 10 numeros aleatorios entre 0 y 99 y sacar la media.


$numeros = array();

//rellenar array con numeros aleatorios
for($j=0;$j<10;$j++){
    $ramdom =  rand(0,99);
    $numeros[$j] = $ramdom;
}


$media=0;

for($i=0;$i<count($numeros);$i++){
    $media= $media+$numeros[$i];
}

    echo "La media de los 10 numeros es " . $media/10;

?>