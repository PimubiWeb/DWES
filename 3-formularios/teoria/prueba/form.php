<h1>Validar datos tipo texto en un form</h1>
    <form action="validar_sinfuncion.php" method="post"><br>
        <label for="nombre">Nombre: </label><br>
        <input type="text" name="nombre" pattern ="[a-zA-z]+"><br>

        <label for="apellidos">Apellidos: </label><br>
        <input type="text" name="apellidos" required ="required"><br>

        <label for="edad">Edad: </label><br>
        <input type="number" name="edad" required ="required"><br>

        <input type="submit" value ="Enviar" >
    </form>