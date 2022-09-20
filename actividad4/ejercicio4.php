<?php  
/*
 * Guarda en un array 10 números y saca el número más grande de todos ellos
 
 * 
 */

    $numeros = array(1,21,349,33,200,58,95,843,100,743);
    $numeroMasGrande=0;

    
    for($i=0; $i< count($numeros);$i++){
        if ($numeroMasGrande<$numeros[$i]) {
            $numeroMasGrande = $numeros[$i];
        }
        
    }
    
    echo "Numero mas grande " . $numeroMasGrande;
?>