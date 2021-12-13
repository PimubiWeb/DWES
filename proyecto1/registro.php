<?php
/*
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
*/

if(isset($_POST)){

    //conexion a la base de datos
    require_once 'includes/conexion.php';

    //iniciar sesion
    if(!isset($_SESSION)){
        session_start();
    }

    //recoger los valores del formulario de registro
    //para dar mayor seguridad usamos mysqli_real_escape_string
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

    //array errores
    $errores = array();

    //validar los datos antes de guardarlos en la base de datos

    //validar campo nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es válido";
    }

    //validar campo apellidos
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $apellidos_validado = true;
    }else{
        $apellidos_validado = false;
        $errores['apellidos'] = "El apellidos no es válido";
    }

    //validar email
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_valido = true;
    }else{
        $email_valido = false;
        $errores['email'] = "el email no es válido";
    }

    //validar contraseña
    if(!empty($password)) {
        $password_valido = true;
    }else{
        $password_valido = false;
        $errores['password'] = "la contraseña no es válida";
    }

    if(count($errores) == 0){
        $guardar_usuario = true;

        //cifrar la contraseña
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

        //INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
        $sql = "INSERT INTO usuarios VALUES(null,'$nombre', '$apellidos, '$email,'$password_segura', CURDATE())";
        $guardar = mysqli_query($db, $qsl);

        if($guardar) {
            $_SESSION['completado'] = "El registro se ha completado.";
        }else{
            $_SESSION['errores']['general'] = "Fallo al guardar el usuario";
        }


    }else{
        $_SESSION['errores'] = $errores;
    }
    
}

header('Location: index.php');
?>