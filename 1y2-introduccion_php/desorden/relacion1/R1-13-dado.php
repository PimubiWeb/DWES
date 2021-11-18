<?php 
$num1 = rand(1,6);
$num2 = rand(1,6);


echo "El primer dado ha sacado $num1 <br/>";
echo "El segundo dado ha sacado $num2 <br/><br/>";

if ($num1 == $num2) {
	echo 'ha salido mismo valor';
}
else if ($num1 > $num2) {
	echo "El mayor de los valores es $num1";
}
else {
	echo "El mayor de los valores es $num2";
}	
?>