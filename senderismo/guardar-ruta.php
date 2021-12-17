<?php

if(isset($_POST)){
	
	require_once 'includes/conexion.php';
	
	$titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
	$descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
	$denivel = isset($_POST['denivel']) ? mysqli_real_escape_string($db, $_POST['denivel']) : false;
	$distancia = isset($_POST['distancia']) ? mysqli_real_escape_string($db, $_POST['distancia']) : false;
	$categoria = $_POST['dificultad'];
	$nota = isset($_POST['nota']) ? mysqli_real_escape_string($db, $_POST['nota']) : false;
	
	// Validación
	//hago un array de errores
	$errores = array();
	
	//validacion campo titulo
	if(empty($titulo)){
		$errores['titulo'] = 'El titulo no es válido';
	}
	
	//validacion campo descripcion
	if(empty($descripcion)){
		$errores['descripcion'] = 'La descripción no es válida';
	}
	
	//validacion campo descripciondificultad
	if(empty($dificultad)){
		$errores['dificultad'] = 'La dificultad no es válida';
	}

	//validacion campo desnivel
	if(empty($desnivel)){
		$errores['desnivel'] = 'La desnivel no es válida';
	}

	//validacion campo distancia
	if(empty($distancia)){
		$errores['distancia'] = 'La distancia no es válida';
	}

	//validacion campo nota
	if(empty($nota)){
		$errores['nota'] = 'La nota no es válida';
	}
	
	
	//comprobamos si existen errores
	if(count($errores) == 0){
		if(isset($_GET['editar'])){
			$ruta_id = $_GET['editar'];
			$usuario_id = $_SESSION['usuario']['id'];
			
			$sql = "UPDATE rutas SET titulo='$titulo', descripcion='$descripcion';";

		}else{
			$sql = "INSERT INTO rutas VALUES(null, $ruta_id, $titulo, '$descripcion', '$desnivel','$distancia,$dificultad,$nota';";
		}
		$guardar = mysqli_query($db, $sql);

		header("Location: index.php");
	}else{

		$_SESSION["errores_ruta"] = $errores;
		
		if(isset($_GET['editar'])){
			header("Location: editar-ruta.php?id=".$_GET['editar']);
		}else{
			header("Location: crear-entradas.php");
		}
	}
	
}

