<?php 

/*
 * En este programa tendrás que utilizar un array asociativo para guardar como key cada día de la semana y asociar a cada día un valor entero.
 * Se trandrá que mostrar en pantalla cada día y valor almacenado en el array así como la suma y media de todos los valores guadados en el array.
 */

    $semana=array(" Lunes"=>30," Martes"=>15," Miercoles"=>12," Jueves"=>84," Viernes"=>39," Sabado"=>54," Domingo"=>43);
    
    print_r($semana);
    $suma=0;
    $media=0;
    
    
    foreach ($semana as $key => $value){
        
        $suma = $suma + $semana[$key];
        
    }
    
    $media=$suma/7;
    
    echo "<br>La suma total es: " .$suma;
    echo "<br>La mdia es: " . $media;

?>