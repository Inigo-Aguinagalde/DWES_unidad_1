<?php

include 'ordenador.php';
use Ordenador as ordenador;


$ordenador  = new ordenador();
 
 $ordenador->setEsSobremesa(true);
 $ordenador->setCodHZ("HZ114486");
 $ordenador->setSO("Windows");
 
 $ordenador->toString();






