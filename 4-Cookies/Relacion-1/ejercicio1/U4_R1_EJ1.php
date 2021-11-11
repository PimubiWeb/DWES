<?php
    //CONTDOR DE VISITAS
    
    //unset($_COOKIE["visitas"]);
    //setcookie("vivitas","",time() - 600);

    if(!isset($_COOKIE["visitas"])){
        echo "bienvenido por primera vez jefe";
        setcookie("visitas",2,time() + 3600 * 24);
        
    }else{
            $visitas = (int) $_COOKIE['visitas'];
            $visitas++;
            setcookie("visitas", $visitas, time() + 3600 * 24);
            echo "welcome to the jungle por $visitas vez";
        }
?>

