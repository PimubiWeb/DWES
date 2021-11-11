<?php
    //IDIOMAS

    if(!isset($_COOKIE['idioma']) or $_COOKIE['idioma'] === "esp"){
        $esp_checked = "checked";
        $en_checked = "";

    }else{
        $esp_checked = "";
        $en_checked = "checked";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idiomas</title>
</head>
<body>
    <form action="paginanueva.php" method="post">
    <p>Selecciona el idioma
        <input type="radio" name="idioma" <?php echo "$esp_checked"?> value="esp"> Español
        <input type="radio" name="idioma" <?php echo "$en_checked"?> value="en"> Ingles

        <input type="submit" value="cambiar idioma">
    </p>
    
    </form>
<?php
    if(!isset($_COOKIE['idioma']) or $_COOKIE['idioma'] === "esp"){
        echo "hola";
    }else{
        echo "hello";
    }
?>
</body>
</html>