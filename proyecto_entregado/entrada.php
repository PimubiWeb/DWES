<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/funciones.php'; ?>
<?php
	
	$entrada_actual = conseguirUltimaEntrada($db, $_GET['id']);

	if(!isset($entrada_actual['id'])){
		header("Location: index.php");
	}
	
?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">

	<h1><?php $entrada_actual['titulo'] ?></h1>
	
	<a href="categoria.php?id=<?php $entrada_actual['categoria_id']?>">
		<h2><?php $entrada_actual['categoria']?></h2>
	</a>
	<h3><?php $entrada_actual['fecha']?> | <?php $entrada_actual['usuario'] ?></h4>
	<p>
		<?php $entrada_actual['descripcion']?>
	</p>
	
	<?php if(isset($_SESSION["usuario"]) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']){ ?>
		<br/>	
		<a href="editar-entrada.php?id=<?php $entrada_actual['id']?>" class="boton">Editar entrada</a>
		<a href="borrar-entrada.php?id=<?php $entrada_actual['id']?>" class="boton">Eliminar entrada</a>
	<?php } ?>
	
</div>
			
<?php require_once 'includes/pie.php'; ?>