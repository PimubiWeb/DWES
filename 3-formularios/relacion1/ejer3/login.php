<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario login</title>
</head>
<body>
    <?php if(isset($err)){
        echo "<p>revise usuario y contra</p>";
    }
    ?>
    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?> method="post">
        Usuario: <input type="text" name="usuario"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Enviar">

        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if($_POST['usuario']=='usuario' and $_POST['password']=="1234"){
                header("Location:bienvenido.html");
            }else {
                $err =true;
                echo $err;
            }
        }
        ?>
</body>
</html>
