<?php
// Conexión a la base de datos
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$database = 'proyecto1';
$db = mysqli_connect($servidor, $usuario, $password, $database) or die("Error al conectar a la base de datos");

//Indicamos que es formato UTF8
mysqli_query($db, "SET NAMES 'UTF8'");

// Inicio la sesión
if(!isset($_SESSION)){
	session_start();
}