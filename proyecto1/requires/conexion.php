<?php
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$proyecto = 'proyecto1';

$conexion = mysqli_connect($servidor,$usuario,$password,$proyecto) or die(mysql_error($mysqli));
?>