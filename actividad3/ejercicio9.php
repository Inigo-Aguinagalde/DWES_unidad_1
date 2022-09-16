<?php 
/*
 * El servidor recibirá un número. El programa tendrá que decirnos si es primo o no.

 */

    $numero = $_GET["num"];
    $primo=1;

    
    for($i=1;$i<$numero;$i++) {
        
        if($numero%$i==0){
            
            $primo= $primo +1;
            
        }
        
        if($primo>2){
            break;
        }
    }
    if ($primo==2) {
        echo "El numero " . $numero . " es primo";
    }
    

?>