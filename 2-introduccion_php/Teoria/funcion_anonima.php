<?php

$multiplicador = function($a, $b) {
return $a * $b;
};

$numeros = range(1, 10);
$numeros2 = range (1, 10);
$lista = array_map($multiplicador, $numeros, $numeros2);

echo implode(" ", $lista);

$colorCoche = 'rojo';

$mostrarColor = function() use ($colorCoche) {
    $colorCoche = 'azul';
};

$mostrarColor();
echo $colorCoche; // Mostrará rojo

//Si se quiere que su valor se altere, se pasa por referencia añadiéndole un ampersand & delante:

$colorCoche = 'rojo';

$mostrarColor = function() use (&$colorCoche) {
    $colorCoche = 'azul';
};

$mostrarColor();
echo $colorCoche; // Mostrará azul


?>