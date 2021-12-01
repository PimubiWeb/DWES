<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>pagina_busqueda</title>
</head>
<body>
<?php

    $busqueda = $_REQUEST["buscar"];

    require("datos_conexion.php");

    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

    if(mysqli_connect_errno()) {
        echo "Fallo al conectar con la BBDD";
        exit();
    }

    mysqli_select_db($conexion,$db_nombre) or die("No se encuentra la base de BBDD");

    mysqli_set_charset($conexion, "utf8");

    $consulta="SELECT * FROM producto WHERE nombre_corto=$busqueda;";

    $resultados=mysqli_query($conexion,$consulta);

    while($fila=mysqli_fetch_assoc($resultados)) {
        echo "<table><tr><td>";
        echo $fila['id']. "</td><td>";
        echo $fila['nombre_corto']. "</td><td>";
        echo $fila['PVP']. "</td><tr></table>";

        echo "<br>";
        echo "<br>";
    }
?>
</body>
</html>