<?php

$numeros = [6,2,3,4,5,1,7,8];

foreach($numeros as $numero){
    print($numero)."<br>";
}

sort($numeros);
var_dump($numeros);
echo count($numeros)."<br>";
echo $numeros[2]."<br>";
echo $numeros[$_GET['numeroURL']];

?>