<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST['nombre']) and isset($_POST['telefono']) and isset($_POST['correo']))
        {
            if(!empty($_POST['nombre']) and !empty($_POST['telefono']) and !empty($_POST['correo']))
            {
                $nombre = $_REQUEST["nombre"];
                $tlf = $_REQUEST["telefono"];
                $correo = $_REQUEST["correo"];
            }
        }
        echo "¡Buenos días, ". $nombre.
        "Te voy a enviar un spam a " . $correo.
        "Y te llamarde madrugada a ". $tlf .
        "Enviado desde un iPhone;"; 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ejer4</title>
</head>
<body>
    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?> method="post">
        <h3>Introduce los siguientes datos: </h3>
        <div>
            <p>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?php if(isset($nombre)) echo $nombre; ?>">
            </p>

            <p>
            <label for="telefono">Telefono: </label>
            <input type="number" name="telefono">
            </p>
            
            <p>
            <label for="correo">Correo: </label>
            <input type="email" name="correo" size="30" required>
            </p>
            <p>
            <input type="submit" value="Enviar">
            </p>
        </div>
    </form>
</body>
</html>