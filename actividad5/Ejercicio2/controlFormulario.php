<?php

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


if (empty($_POST['cine'])) {
    $cine="";
}else {
    $cine=$_POST['cine'];
}
if (empty($_POST['literatura'])) {
    $literatura="";
    
}else {
    $literatura=$_POST['literatura'];
}
if (empty($_POST['tebeos'])) {
    $tebeos="";
}else {
    $tebeos=$_POST['tebeos'];
}
if (empty($_POST['deporte'])) {
    $deporte="";
}else {
    $deporte=$_POST['deporte'];
}
if (empty($_POST['musica'])) {
    $musica="";
    
}else {
    $musica=$_POST['musica'];
}
if (empty($_POST['television'])) {
    $television="";
}else {
    $television=$_POST['television'];
}


$aficionesRecibidas = array(
    $cine,
    $literatura,
    $tebeos,
    $deporte,
    $musica,
    $television
);

$aficiones = array();


for ($i = 0; $i < count($aficionesRecibidas); $i++) {
    if ($aficionesRecibidas[$i] != "") {
        $aficiones[]=$aficionesRecibidas[$i];
    }
    
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
    echo "<p>Su nombre es: <b>" .  $nombre . "</b></p>";
}
?>

<br>
<?php

if ($apellidoBolean == false) {
    echo "<p style='color: red'>Su apellido es: ";
}else {
    echo "<p>Su apellido es: <b>" .  $apellido . "</b></p>";
}
?>

<br>
<?php

if ($edadBolean == false) {
    echo "<p style='color: red'>Su edad es: ";
}else {
    echo "<p>Su edad es: <b>" .  $edad . "</b></p>";
}
?>
<br>
<?php

if ($pesoBoolean == false) {
    echo "<p style='color: red'>Su peso es: ";
}else {
    echo "<p>Su peso es: <b>" .  $peso . " kg </b></p>";
}
?>
<br>
<?php

if ($sexoBolean == false) {
    echo "<p style='color: red'>Su sexo es: ";
}else {
    echo "<p>Su sexo es: <b>" .  $sexo . "</b></p>";
}
?>
<br>
<?php

if ($estadoCivilBolean == false) {
    echo "<p style='color: red'>Su estado civil es: ";
}else {
    echo "<p>Su estado civil es: <b>" .  $estadoCivil . " </b></p>";
}
?>
<br>
<p>Sus aficiones son: <?php

for ($i = 0; $i < count($aficiones); $i ++) {
    
    echo "<b> " . $aficiones[$i] . ", </b>";
}
?></p>
<a href="datos2.html" target="_blank"/><p>Volver al Formulario</p>
</body>
</html>