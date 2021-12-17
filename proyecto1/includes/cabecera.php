<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/funciones.php'; ?>
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Blog de Videojuegos</title>
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
	</head>
	<body>
		<!-- CABECERA -->
		<header id="cabecera">
			<!-- LOGO -->
			<img src="./assets/img/logo.jpg" alt="logo" width="125" height="100px">
			<h1>
				<a href="index.php">Blog de Videojuegos</a>
			</h1>
			
			<!-- MENU -->
			<nav id="menu">
				<ul>
					<li>
						<a href="index.php">Inicio</a>
					</li>
					<?php 
						$categorias = conseguirCategorias($db);
						if(!empty($categorias)){
							while($categoria = mysqli_fetch_assoc($categorias)){
					?>
								<li>
									<a href="categoria.php?id=<?php $categoria['id']?>"><?php $categoria['nombre']?></a>
								</li>
					<?php
							}
						}
					?>
					<li>
						<a href="sobremi.php">Sobre mí</a>
					</li>
					<li>
						<a href="contacto.php">Contacto</a>
					</li>
				</ul>
			</nav>
			
			<div class="clearfix"></div>
		</header>
		
		<div id="contenedor">