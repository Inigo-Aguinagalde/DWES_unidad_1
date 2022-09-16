<?php

/*
 */

	$dni1="44582369G";
	$dni2 = "7523695L";
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


?>

<table border='1'>
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