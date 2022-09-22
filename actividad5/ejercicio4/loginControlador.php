<?php 

$user = inigo;
$password = 1234;

$name = $_POST["name"];
$contraseña = $_POST["Password"];

$hash = password_hash($password, PASSWORD_BCRYPT);



if($user==$name){
    if (password_verify($contraseña, $hash)) {
        echo "Welcome";
        header("Location: prueba.php");
    }else{
        echo "La contraseña no es correcta";
        header("Location: login.php?error=true");
    }
}else{
    header("Location: login.php?error=true");
    
}


?>