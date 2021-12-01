<?php
$usuario    = $_REQUEST["usuario"];
$contraseña = $_REQUEST["contraseña"];

$consulta = "SELECT COUNT(*) FROM $dbTabla
    WHERE campo1='$usuario'
    AND campo2='$contraseña'";
$result = sqlite_exec($db, $consulta);
if (!$result) {
    print "<p>Error en la consulta.</p>\n";
} elseif ($result[0][0] > 0) {
    print "<p>Nombre de usuario y contraseña correctos.</p>\n";
} else {
    print "<p>yoese.</p>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        usuario: <input type="text" name="usuario"> <br>
        pass: <input type="text" name="password">
        <input type="submit">
    </form>
</body>
</html>