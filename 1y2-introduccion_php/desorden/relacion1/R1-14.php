<?php
/*
Escriba un script que cada vez que se ejecute muestre un línea de longitud entre 10 y 1000 píxeles (Deberemos recoger la longitud por URL con GET)
Usa print
Puedes usar SVG para la línea
*/

$num = 500;
if (isset($_GET['num'])) {
    $num = is_numeric($_GET['num']) ? $_GET['num'] : null;

    if ($num < 10)    {$num = 10;}
    if ($num > 1000)  {$num = 1000;}
}
?>

<hr style="float:left;width:<?php echo $num; ?>px;height:10px;background:black;">