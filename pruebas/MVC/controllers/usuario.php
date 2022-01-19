<?php
require_once 'models/usuario.php';

class UsuarioController {

    public function mostrarTodos() {

        $usuario = new Usuario();
        $todoslosusuarios = $usuario->conseguirTodos();
        require_once 'views/usuarios/mostrartodos.php';


    }

    public function crear() {
        require_once 'views/usuarios/crear.php';
    }
}