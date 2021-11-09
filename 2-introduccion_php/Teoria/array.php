<?php

$profesores = [
    array($nrp => 1,$nombre => "Belen",$apellidos => "Callejon Prieto",$telefono => 10),
    array($nrp => 2,$nombre => "Pepe",$apellidos => "Gonzales",$telefono => 21),
    array($nrp => 4,$nombre => "Antonio",$apellidos => "Lopez",$telefono => 33)
];
//fn anonima -> el nrp que hay en ese array
//con un foreach

$lista = foreach($profesores[0] as $profe){
    $lista[]= $profe;
}
print_r($lista);


//sacar de array profesores utilizando fn anonimas los que tengan un apellido en concreto(ARRAY_FILTER/STROTTIME)

?>