<?php 
/*
 * Tendremos los datos personales de 2 personas en 6 variables. Cada persona tendrá 3 datos:
nombre, apellido y DNI.
Hay que meter todos los datos en un array asociativo donde
 los índices sean “nombre”, “apellido”, “DNI” y después visualizarlos por pantalla en formato tabla.
Podéis ver y probar este ejemplo.
 */


$dni1="44582369G";
$dni2="27523695L";
$nombre = "jon";
$nombre2 = "joseba";
$apellido = "bartolomeo";
$apellido2 = "juarros";

$array= array(
    "dni" => $dni1,
    "dni2" => $dni2,
    "nombre" => $nombre,
    "nombre2" => $nombre2,
    "apellido" => $apellido,
    "apellido2" => $apellido2
);

echo "Tabla hecha con echo en php";

echo "<table border='1'>";
echo "<tr>";
echo "<td>DNI</td>";
echo "<td>Nombre</td>";
echo "<td>Apellidos</td>";
echo "</tr>";
echo "<tr>";
echo "<td>" . $array['dni'] . "</td>";
echo "<td>" . $array['nombre'] . "</td>";
echo "<td>" . $array['apellido'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>" . $array['dni2'] . "</td>";
echo "<td>" . $array['nombre2'] . "</td>";
echo "<td>" . $array['apellido2'] . "</td>";
echo "</tr>";

echo "<br>";
?>


<table border='1'>
<p>Tabla hecha con html y las columnas con php</p>
	<tr>
    	<td>DNI</td>
    	<td>Nombre</td>
    	<td>Apellidos</td>
    </tr>
    <tr>
    <?php 
    	echo "<td>" . $array['dni'] . "</td>";     	
    	echo "<td>" . $array['nombre'] . "</td>";
    	echo "<td>" . $array['apellido'] . "</td>";
    	?>
    </tr>
    <tr>
    	<?php 
    	echo "<td>" . $array['dni2'] . "</td>";
    	echo "<td>" . $array['nombre2'] . "</td>";
    	echo "<td>" . $array['apellido2'] . "</td>";
    	
    	?>
    </tr>  	
       				
</table>

<?php 
echo "<br>";
?>

<?php 
echo "Tabla hecha con html y las datos de las columnas sacados con php";
?>
<table border='1'>
	<tr>
    	<td>DNI</td>
    	<td>Nombre</td>
    	<td>Apellidos</td>
    </tr>
    <tr>
    	<td><?php echo $array['dni']; ?></td>
    	<td><?php echo $array['nombre']; ?></td>
    	<td><?php echo $array['apellido']; ?></td>
    	
    </tr>
    <tr>
    	<td><?php echo $array['dni2']; ?></td>
    	<td><?php echo $array['nombre2']; ?></td>
    	<td><?php echo $array['apellido2']; ?></td>
    </tr>  	
       				
</table>

