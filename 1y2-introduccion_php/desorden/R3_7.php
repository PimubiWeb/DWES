<!--Usar foreach para mostrar todos los valores del array $_SERVER en una tabla con dos columnas.
La primera columna debe contener el nombre de la variable, y la segunda su valor-->
<!DOCTYPE html>
<html>
<body>
    <table border ="1px">
    <tbody>
      <tr>
        <td>variable</td>
        <td>valor</td>
      </tr>
<?php
foreach($_SERVER as $variable => $valor){
  echo "<tr>";
  echo "<td>".$variable."</td>";
  echo "<td>".$valor."</td>";
  echo "</tr>";
}
?>
</tbody>
</table>
</body>
</html>
