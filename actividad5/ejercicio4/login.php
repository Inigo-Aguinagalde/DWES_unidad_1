<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>

<body>
	<form action="loginControlador.php" method="post">
	<p>Nombre</p><input type="text" name="name">
	<p>Password</p><input type="password" name="Password">
	<input type="submit"> 
	</form>
</body>

<?php 

if(isset($_GET['error']) && $_GET['error'] == 'true'){
    {
        echo "<div style='color:red'>Usuario o contraseña invalido </div>";
    }
}

?>

</html>