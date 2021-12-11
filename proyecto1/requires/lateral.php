<div id="sidebar">
 
<div id="buscador" class="bloque"></div>
    <h3>Buscar</h3>

    <form action="buscar.php" method="POST">
            <input type="text" name="busqueda">
            <input type="submit" name="Buscar">
    </form>

    <?php if(isset($_SESSION['usuario']))?>
        <div id="usuario-logueado" class="bloque">
            <h3>Bienvenido, <?php $_SESSION['usuario']['nombre']?></h3>
            <!--botones-->
            <a href="crear-entradas.php" class="boton boton-verde">Crear entrada</a>
            <a href="crear-categoria.php" class="boton">Crear categoria</a>
            <a href="mis-datos" class="boton boton-naranja">Mis datos</a>
            <a href="crear-categoria.php" class="boton">Cerrar sesión</a>
        </div>
        <?php if(isset($_SESSION['usuario']))?>
        <div id="login" class="bloque">
            <h3>Identificate</h3>
            <?php if(isset($_SESSION['error_login']))?>
                <div class="alerta alerta-error">
                        //TODO iepaaa
                </div>  

        </div>
</div>