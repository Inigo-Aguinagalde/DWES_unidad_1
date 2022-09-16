<?php 
/*
 * Se recibirá un dato llamado pares por GET que contendra TRUE o FALSE.
Si es TRUE, mostrar en pantalla números pares del 1 al número
 aleatorio menor que 99 si se le ha recibido  el valor FALSE en la pantalla tienen que aparecer los valores impares.

 */
    $user = $_GET["bol"];
    
    echo $user. "<br>";
    if($user=="false"){
        $bolean=false;
    }elseif ($user=="true"){
        $bolean=true;
    }
 
        for($i=0;$i<100;$i++){
            $var = rand(1,99);
            if ($bolean && $var%2==0) {
                echo $var . "<br>";
            }elseif ($bolean ==false && $var%2!=0) {
                echo $var . "<br>";
                }
        }
    

?>

