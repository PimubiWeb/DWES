<?php
require('conexion.php');

//VALIDACIONES
//inicio una sesion para validar con sesiones
session_start();

//defino una fun para quitar caracteres
function quitarCaracteres($a){
    return stripslashes(trim(htmlspecialchars($a)));
}

//VALIDACION NOMBRE
$nombre = quitarCaracteres($_REQUEST["nombre"]);
if(empty($nombre) || preg_match('/[^a-z A-Z0]/', $nombre)){
    $_SESSION["error_nombre"] = true;
}

//VALIDACION APELLIDOS
$apellidos = quitarCaracteres($_REQUEST["apellidos"]);
if(empty($apellidos) || preg_match('/[^a-z A-Z0]/', $apellidos)){
    $_SESSION["error_apellidos"] = true;
}

//VALIDACION CORREO
$email = quitarCaracteres($_REQUEST["email"]);
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION["error_email"] = true;
}

//VALIDACION CONTRASEÑA
$password = quitarCaracteres($_REQUEST["password"]);
if(empty($password) || preg_match('/[^a-zA-Z0-9_\-!¡?¿+*]/', $password)){
    $_SESSION["error_password"] = true;
}

$consulta = "INSERT INTO usuarios(nombre,apellidos,email,password) VALUES('$nombre','$apellidos','$email','$password')";

mysqli_query($conexion,$consulta);
mysqli_close($conexion);
?>