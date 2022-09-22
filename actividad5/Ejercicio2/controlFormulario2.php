<?php

print_r($_POST['aficiones']);
if (empty($_POST['name'])) {
  
    $nombreBolean = false;
}else {
    $nombre = $_POST["name"];
    $nombreBolean=true;
}

if (empty($_POST['apellido'])) {
    
    $apellidoBolean = false;
}else {
    $apellido = $_POST["apellido"];;
    $apellidoBolean=true;
}

if (empty($_POST['edad'])) {
    
    $edadBolean = false;
}else {
    $edad = $_POST["edad"];
    $edadBolean=true;
}

if (empty($_POST['peso'])) {
    
    $pesoBoolean = false;
}else {
    $peso = $_POST["peso"];
    $pesoBoolean=true;
}

if (empty($_POST['sexo'])) {
    
    $sexoBolean = false;
}else {
    $sexo = $_POST["sexo"];
    $sexoBolean=true;
}

if (empty($_POST['estadoCivil'])) {
    
    $estadoCivilBolean = false;
}else {
    $estadoCivil = $_POST["estadoCivil"];
    $estadoCivilBolean=true;
}



?>


<!DOCTYPE html>
<html>
<head>
<title>Formulario</title>
</head>

<body>

<?php

if ($nombreBolean == false) {
    echo "<p style='color: red'>Su nombre es: ";
}else {
    echo "<p>Su nombre es: <?php $nombre ?></p>";
}
?>

<br>
<?php

if ($apellidoBolean == false) {
    echo "<p style='color: red'>Su apellido es: ";
}else {
    echo "<p>Su apellido es: <?php $apellido ?></p>";
}
?>

<br>
<?php

if ($edadBolean == false) {
    echo "<p style='color: red'>Su edad es: ";
}else {
    echo "<p>Su edad es: <?php $edad ?></p>";
}
?>
<br>
<?php

if ($pesoBoolean == false) {
    echo "<p style='color: red'>Su peso es: ";
}else {
    echo "<p>Su peso es: <?php $peso ?></p>";
}
?>
<br>
<?php

if ($sexoBolean == false) {
    echo "<p style='color: red'>Su sexo es: ";
}else {
    echo "<p>Su sexo es: <?php $sexo ?></p>";
}
?>
<br>
<?php

if ($estadoCivilBolean == false) {
    echo "<p style='color: red'>Su estado civil es: ";
}else {
    echo "<p>Su estado civil es: <?php $estadoCivil ?></p>";
}
?>
<br>
<p>Sus aficiones son: <?php


$aficiones = $_POST['aficiones'];

for ($i = 0; $i < count($aficiones); $i ++) {
    
    echo  "<br>" . $aficiones[$i] . "," ;
}
?></p>

<a href="datos2.html" target="_blank"/><p>Volver al Formulario</p>
</body>
</html>