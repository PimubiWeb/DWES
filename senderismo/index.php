<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SENDERISMO</title>
</head>
<body>
	<!-- CAJA PRINCIPAL -->
<div id="principal">
	<!--CABECERA-->
	<h1>RUTAS DE SENDERISMO</h1>
	<!-- PANEL -->
	<p>buscar por el campo titulo: <select name="campo" id="">
		<option value="titulo">titulo</option>
		<option value="descripcion">desc</option>
		<option value="desnivel">desnivel</option>
	</select></p>

	<div>
		<form action="buscar.php" method="POST"> 
			<input type="text" name="busqueda" />
			<input type="submit" value="Buscar" />
		</form>
	</div>
	<div>
		<a href="crear-ruta.php">nueva ruta</a>
	</div>
	<div>
		<a href="listadocompleto.php">listado completo</a>
	</div>
</div>
</body>
</html>		
