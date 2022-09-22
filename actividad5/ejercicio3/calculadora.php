<?php 


$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$operator=$_POST['operator'];


if($operator=="suma"){
    $total= $num1 + $num2;
    echo "La suma entre los dos numeros es:     " . $total ;
}elseif ($operator=="resta"){
    $total= $num1 - $num2;
    echo "La resta entre los dos numeros es: " . $total;
}elseif ($operator=="multi"){
    $total= $num1 * $num2;
    echo "La multiplicacion entre los dos numeros es: " . $total;
}elseif ($operator=="division"){
    $total= $num1 / $num2;
    echo "La division entre los dos numeros es: " . $total;
}

?>