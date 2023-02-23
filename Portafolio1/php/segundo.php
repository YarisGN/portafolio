<?php
//continuamos la sesión
session_start();
//devolver los valores de sesión

echo "Nombre de usuario:" . $_SESSION["usuario"];



?>