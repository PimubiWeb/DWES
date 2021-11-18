<?php

$array = range(1, 10);
$array = array_map(
    function($n) { return ($n * 2) - 1;},
    $array
);

echo implode(", ", $array);

//sacar de array profesores utilizando fn anonimas los que tengan un apellido en concreto(ARRAY_FILTER/STROTTIME)

?>