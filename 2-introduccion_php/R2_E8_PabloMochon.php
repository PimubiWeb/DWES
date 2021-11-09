<?php
function validar_matricula($cadena){
    //variable para comprobar si la cadena es correcta o no. La inicializamos como correcta (True)
    $validar = True;
    
    //condicionamos la cadena si tiene 7 caracteres 
    if(strlen($cadena) == 7){
        //recorremos toda la cadena
        for($i = 0; $i < 7; $i++){
            //si los primeros cuatro primeros caracteres no son numeros del 1 al 9 ==> cadena ya no es correcta
            if($i < 4 && ($cadena[$i] < 0 || $cadena[$i] > 9)){
                $validar = False;
            //si los ultimos caracteres no son mayusculas ==> la cadena ya no es True
            }else if($i >= 4 && strtoupper($cadena[$i] != $cadena[$i])){
                $validar = False;
            }
        }
    //si la cadena no tiene 7 caracteres ya no es true
    }else{
        $validar = False;
    }
    //depues de recorrer todos los condicionales nos dara si la cadena es True(1) or False(0) (en PHP el 0 no se muestra en pantalla)
    return $validar;
}
echo  "Matricula A vale: " . validar_matricula("pepe3333") . "<br>";
echo "Matricula B vale: " . validar_matricula("1234ABC");

?>