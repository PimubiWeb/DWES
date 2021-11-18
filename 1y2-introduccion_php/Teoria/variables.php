<?php

    $var1 = 100;

    echo var_dump($var1) . "<br>";
    echo gettype($var1) . "<br><br>";

    function imprimir($suma){
        global $var1;
        echo $suma;
        echo $var1;
    }

    imprimir($var1);


    echo "<br> ip server " . $_SERVER['SERVER_ADDR'];
    echo "<br> nombre server " . $_SERVER['SERVER_NAME'];
    echo "<br> programa DE server " . $_SERVER['SERVER_SOFTWARE'];
    echo "<br> protocolo server " . $_SERVER['SERVER_PROTOCOL'];
    echo "<br> metodo de peticion " . $_SERVER['REQUEST_METHOD'];
    echo "<br> ruta dentro de htdocs " . $_SERVER['PHP_SELF'];
    echo "<br> navegador " . $_SERVER['HTTP_USER_AGENT'];

    //constantes

    echo 'estas son algunas de las constantes predefinidas:'."<br>"; 
    echo PHP_OS." este es el sistema operativo "."<br>"; 
    echo PHP_VERSION." esta el la versión de PHP". "br>"; 
    echo PHP_EXTENSION_DIR." Aqui tenemos instaladas las extensiones ";
    echo _LINE_ ."esta es la línea en la que estoy","br";
    echo _FILE_ ."y esta la ruta de mi anchivo"." br"; 
    echo PHP_INT_SIZE.' dato entero'.' br'; 
    echo PHP_INT_MIN.' este es el val minimo de un entero!';
    echo PHP_INT_MAX.' y este el valor minimo de un entero '.'<br>';


?>