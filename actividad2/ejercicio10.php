<?php 

    /*
     * Tengo un billete de avión para Denver definir la variable dataSalida.
     *  Necesito que el programa calcule cuantas horas o minutos me faltan para coger dicho avión,
     *   dependiendo de la hora actual.
     */
    
  
    $dataSalida = date_create("2022-12-25 13:15:36");
    $currentDate = new DateTime("now");
    $interval = date_diff($currentDate, $dataSalida);
   
    echo "Fecha salida " . $dataSalida->format('Y-m-d H:i:s') . "<br>";
    echo "Fecha Actual " . $currentDate->format('Y-m-d H:i:s') . "<br>";
    
    echo "Tiempo faltante " . $interval->format('%m meses , %d días, %h horas , %m minutos , %s segundos ');
    
   

    

?>