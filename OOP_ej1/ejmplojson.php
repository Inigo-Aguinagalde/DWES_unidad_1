<?php
include 'ordenador.php';

$o1 = new Ordenador();
$o1->setCodHZ("hz1111");
$o1->setSO("w10");

$o1->setEsSobremesa(true);

$s = serialize($o1);

$o2 = unserialize($s);
echo "o1 serializado y desesrializado<br>";
var_dump($o2);
echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo $s;

echo "<br>";echo "<br>";echo "<br>";echo "<br>";
$ordenadoresArchivo = "Ordenadores.json";

file_put_contents($ordenadoresArchivo, $s);


var_dump($s);
echo "<br>";


$o3 = unserialize(file_get_contents($ordenadoresArchivo));
echo "deserializado de fichero";
var_dump($o3);