<?php
include 'ordenador.php';

use Ordenador as clOrdenador;

$ordenadores = array();


$so = $_POST["so"];

$hz = $_POST["hz"];



if ($_POST['sobremesa']=="si") {
    $sobremesa=true;
}else if ($_POST['sobremesa']=="no") {
    $sobremesa=false;
}

$jsonData = file_get_contents('Ordenadores.json',true);

$jsonDecode = json_decode($jsonData,true);




$tieneDatos= empty($jsonDecode);






$ordenador = new clOrdenador(); 

$ordenador->setCodHZ($hz);
$ordenador->setSO($so);
$ordenador->setEsSobremesa($sobremesa);
$existe;


//Comprobar que el ordenador nuevo existe en el array
for ($i = 0; $i < count($jsonDecode); $i++) {

    if($jsonDecode[$i]['Identificador'] == $ordenador->getCodHZ()){
        echo "No se puede guardar un ordenador previamente guardado";
        $existe=true;
        break;
    }else{
        $existe=false;
      
    }
   
}




if ($existe!=true) {
    
    echo "El ordenador se ha guardado con exito";
    $myJson = array(
        "Sistema operativo" => $ordenador->getSO(),
        "Identificador" => $ordenador->getCodHZ(),
        "Sobremesa" =>$sobremesa
    );
    
    $jsonDecode[] = $myJson;
}





$myJson = json_encode($jsonDecode);




$ordenadoresArchivo = "Ordenadores.json";

file_put_contents($ordenadoresArchivo, $myJson);

