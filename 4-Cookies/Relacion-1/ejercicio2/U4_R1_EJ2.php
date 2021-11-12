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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idiomas</title>
</head>
<body>
    <form action="paginanueva.php" method="post">
    <p><?php echo $_COOKIE["idioma"] == "en" ?  "Select a language" : "Selecciona un idioma" ?>
        <input type="radio" name="idioma" <?php echo "$esp_checked"?> value="esp"> <?php echo $_COOKIE["idioma"] == "esp" ?  "Español" : "Spanish" ?>
        <input type="radio" name="idioma" <?php echo "$en_checked"?> value="en"> <?php echo $_COOKIE["idioma"] == "en" ?  "English" : "Ingles" ?> 

        <input type="submit" value=<?php echo $_COOKIE["idioma"] == "en" ?  "change languague" : "cambiar idioma" ?>>
    </p>
    
    </form>
<?php
    if(!isset($_COOKIE['idioma']) or $_COOKIE['idioma'] === "esp"){
        echo "hola esto es un formulario en clase de Belen";
    }else{
        echo "hello there is a form in Belen class";
    }
?>
</body>
</html>