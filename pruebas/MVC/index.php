<h1>Hola mundo MVC</h1>

<?php
require_once 'controllers/usuario.php';

$controlador = new UsuarioController();
$controlador->mostrarTodos();