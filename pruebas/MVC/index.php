<h1>Hola mundo MVC</h1>

<?php
require_once 'controllers/usuario.php';

$controlador = new UsuarioController();

//comprobamos si existe el controlador que estamos pasando por la URL
if(isset($_GET['controller']) && class_exists($_GET['controller'])){
    $nombre_controllador = $_GET['controller'].'Controller';
    $controlador = new $nombre_controllador();
    
    //si existe el controlador comprobamos si existe el metodo
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    }else{
        echo "La pagina que buscas no existe";
    }
}else{ echo "La pagina que buscas no existe"; }

