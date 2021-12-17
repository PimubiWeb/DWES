<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Crear rutas</h1>
	<br/>
	<form action="guardar-ruta.php" method="POST">
		<label for="titulo">Titulo:</label>
		<input type="text" name="titulo" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>
		
		<label for="descripcion">Descripción:</label>
		<textarea name="descripcion"></textarea>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>

		<label for="desnivel">desnivel en m:</label>
		<textarea name="desnivel"></textarea>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'desnivel') : ''; ?>

		<label for="distancia">distancia en km:</label>
		<textarea name="distancia"></textarea>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'distancia') : ''; ?>
		
		
		<label for="dificultad">dificultad</label>
		<select name="dificultad">
				<option value="baja">baja</option>
                <option value="media">media</option>
                <option value="alta">alta</option>
		</select>

		<label for="nota">notas:</label>
		<textarea name="nota"></textarea>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'nota') : ''; ?>
		
		<input type="submit" value="Guardar" />
	</form>

</div>