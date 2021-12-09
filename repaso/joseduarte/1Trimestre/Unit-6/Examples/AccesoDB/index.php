<?php

define("DB_DOMAIN", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "dwes_examples");

//Connection
$connection = mysqli_connect(DB_DOMAIN, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (mysqli_connect_errno()) {
    echo "Fallo en la conexion";
}
else {
    echo "Se ha podido conectar a la base de datos";
}

echo "<br/><br/>";

// Set Charset of Connection to UTF-8
mysqli_query($connection, "SET NAME 'utf8'");

//SQL Query
$result = mysqli_query($connection, "SELECT * FROM usuarios");
var_dump($result);
echo "<br/><br/>";
$usuarios = mysqli_fetch_assoc($result);
var_dump($usuarios);

echo "<br/><br/>";

// Insert
$insert = mysqli_query($connection, "INSERT INTO USUARIOS(nombre, apellidos, email, password) VALUES ('Javier', 'Sanchez Rueda', 'javierSanchezRueda@gmail.com', '12345678')");
var_dump($insert);

// Delete
$delete = mysqli_query($connection, "DELETE FROM USUARIOS WHERE nombre='Javier'");
if ($delete) {
    echo "Se ha podido borrar correctamente";
}
else {
    echo "Fallo en al borrar";
}