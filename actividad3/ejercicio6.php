<?php 
/*
 * Elabore un programa que imprima la figura de un triángulo rectángulo de $numLineas lineas ajustada a
 *  la izquierda, formada por letras “o”. El valor de numero de lineas se enviará al servidor mediante GET.

 */

    $user = $_GET['lineas'];
    echo $user;
    
    
    for ($i=1;$i<=$user;$i++){
        for ($j=1;$j<=$i;$j++){
            echo  "o ";
        }
        echo "<BR>\n ";
    }
    
?>