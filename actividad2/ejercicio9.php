<?php 

/*
    Definir dos notas en dos variables y calcular si la media es aprobada o suspendida.
 
  
 */
    
    $nota1 = rand(1,10);
    $nota2 = rand(1,10);
    $notaTotal = $nota1+$nota2;
    
    if($notaTotal>=5){
        echo 'Aprobado';
        
    }else {
        echo 'Suspendido';
    }
    
 ?>