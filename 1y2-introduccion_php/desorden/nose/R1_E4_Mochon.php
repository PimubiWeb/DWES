<?php

$numeros_array = [];
for($i=0;$i < 15; $i++)
{
    $numeros_array[] = rand(0,100);
}

foreach($numeros_array as $num)
{
    $numeros_array[$num] = $numeros_array[$num+1];
}


?>