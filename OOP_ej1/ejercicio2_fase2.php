<?php
include 'ordenador.php';

use Ordenador as clOrdenador;
$ordenadoresArchivo = "Ordenadores.json";


$so = $_POST["so"];

$hz = $_POST["hz"];



if ($_POST['sobremesa']=="si") {
    $sobremesa=true;
}else if ($_POST['sobremesa']=="no") {
    $sobremesa=false;
}

$jsonData = file_get_contents($ordenadoresArchivo,true);

$jsonDecode = json_decode($jsonData,true);

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

file_put_contents($ordenadoresArchivo, $myJson);
?>

<br>
<a href="ejercicio2_fase2.html"><button>Back</button>

