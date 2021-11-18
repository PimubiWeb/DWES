<?php
//Escribe una función que reciba una cadena y comprueba si es una matrícula válida.
//Tiene que tener siete caracteres, los cuatro primeros números y el resto consonantes mayúsculas.

function validar_matricula($cadena){
    //variable para comprobar si la cadena es correcta o no. La inicializamos como correcta (True)
    $validar = true;
    
    //condicionamos la cadena si tiene 7 caracteres 
    if(strlen($cadena) == 7){
        //recorremos toda la cadena
        for($i = 0; $i < 7; $i++){
            //si los primeros cuatro primeros caracteres no son numeros del 1 al 9 ==> cadena ya no es correcta
            if($i < 4 && ($cadena[$i] < 0 || $cadena[$i] > 9)){
                $validar = false;
            //si los ultimos caracteres no son mayusculas ==> la cadena ya no es True
            }else if($i >= 4 && strtoupper($cadena[$i] != $cadena[$i])){
                $validar = false;
            }
        }
    //si la cadena no tiene 7 caracteres ya no es true
    }else{
        $validar = false;
    }
    //depues de recorrer todos los condicionales nos dara si la cadena es True(1) or False(0) (en PHP el 0 no se muestra en pantalla)
    return $validar;
}
$a = validar_matricula("pepe3333");
$b = validar_matricula("1234ABC");

$a == true ?  $resultado = "la matricula es valida" : $resultado = "la matricula no es valida";
echo  "Matricula A ".$resultado."<br>";

$b == true ?  $resultado = "la matricula es valida" : $resultado = "la matricula no es valida";
echo "Matricula B ".$resultado ;
?>