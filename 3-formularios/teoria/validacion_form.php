<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Validar datos tipo texto en un form</h1>
    <form action="validar_sinfuncion.php" method="post"><br>
        <label for="nombre">Nombre: </label><br>
        <input type="text" name="nombre" pattern ="[a-zA-z]+">

        <input type="submit" value ="Enviar" >
    </form>
</body>
</html>