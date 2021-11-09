<?php

if($_POST['usuario']=='usuario' and $_POST['password']=="1234"){
    header("Location:bienvenido.html");
}else {
    header("Location:error.html");
}

?>