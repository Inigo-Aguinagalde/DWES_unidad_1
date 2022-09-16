<?php 
/*
 * El servidor recibirá un número. Tenemos que sacar por pantalla todos los números primos que hay desde el 1 hasta ese número.
 */

    $numero = $_GET["num"];
    
    function primo($num) {
        $pri=1;
        for($i=1;$i<$num;$i++) {
            
            if($num%$i==0){
                
                $pri= $pri +1;
                
            }
            
            if($pri>2){
                break;
            }
        }
        if ($pri==2) {
            return $num;
        }
    }
    
   
    for ($i = 0; $i <=$numero; $i++) {
       echo primo($i) . "<br>";
    }
    
  

?>