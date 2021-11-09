<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$error = 'errores jeje';

if(isset($_GET['error'])){
    $error == $_GET['error'];

    if($error == 'faltan valores'){
        echo 'introduce los datos'
    }

    if($error == 'nombre'){
        echo '<strong>Introduce el nombre</strong>'
    }

    if($error == 'apellidos'){
        echo '<strong>Introduce el nombre</strong>'
    }

    if($error == 'edad'){
        echo '<strong>Introduce el nombre</strong>'
    }

    if($error == 'email'){
        echo '<strong>Introduce el nombre</strong>'
    }

    if($error == 'pass'){
        echo '<strong>Introduce el password</strong>'
    }
    
    ?>

    <h1>Validar datos tipo texto en un form</h1>
    <form action="validar_sinfuncion.php" method="post"><br>
        <label for="nombre">Nombre: </label><br>
        <input type="text" name="nombre" pattern ="[a-zA-z]+"><br>

        <label for="apellidos">Apellidos: </label><br>
        <input type="text" name="apellidos" required ="required" pattern="[a-zA-z]+"><br>

        <label for="edad">Edad: </label><br>
        <input type="number" name="edad" required ="required" pattern="[0-9]+"><br>

        <label for="email">Email: </label><br>
        <input type="number" name="email" required ="required"><br>

        <label for="pass">Pasword: </label><br>
        <input type="password" name="pass" required ="required" minlength="5"><br>

        <input type="submit" value ="Enviar" >
    </form>
</body>
</html>