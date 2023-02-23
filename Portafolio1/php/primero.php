<?php
//comienzo de la sesión
session_start();
//guardar datos de sesión
$_SESSION["usuario"]="Peter";

echo "Sesion iniciada y establecido nombre de usuario!" . "<br>";



?>

<a href="segundo.php">Segundo!</a>

