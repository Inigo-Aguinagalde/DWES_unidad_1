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
var_dump($jsonData);
$jsonDecode = json_decode($jsonData,true);
echo "////////////////////////////////////////";
var_dump($jsonDecode);

echo "JSON DECODE //////////////////////////// " . $jsonDecode[['Identificador']];

$ordenador = new clOrdenador(); 

$ordenador->setCodHZ($hz);
$ordenador->setSO($so);
$ordenador->setEsSobremesa($sobremesa);
$existe = null;




//Comprobar que el ordenador nuevo existe en el array
for ($i = 0; $i < count($jsonDecode); $i++) {
    if($jsonDecode[$i] == $ordenador->getCodHZ()){
        echo "No se puede guardar un ordenador previamente guardado";
        $existe=true;
        break;
    }else{
        $existe=false;
        echo "El ordenador se ha guardado con exito";
    }
   
}

print_r($ordenadores);



if ($existe!=true) {
    
    $myJson = array([
        "Sistema operativo" => $ordenador->getSO(),
        "Identificador" => $ordenador->getCodHZ(),
        "Sobremesa" =>$sobremesa
    ]);
    
    $jsonDecode[] = $myJson;
}





$myJson = json_encode($jsonDecode);

var_dump($myJson);



$ordenadoresArchivo = "Ordenadores.json";

file_put_contents($ordenadoresArchivo, $myJson);

