<?php

class Usuario extends ModeloBase{
    public $nombre;
    public $apellidos;
    public $email;
    public $password;

    function getNombre(){
        return $this->nombre;
    }

    function getApellidos(){
        return $this->apellidos;
    }

    function getEmail(){
        return $this->email;
    }

    function getPassword(){
        return $this->pasword;
    }

    function setNombre(){
        $this->nombre = $nombre;
    }

    function setApellidos(){
        $this->apellidos = $apellidos;
    }

    function setEmail(){
        $this->email = $email;
    }

    function setPassword(){
        $this->password = $password;
    }

    // public function conseguirTodos(){
    //     return "sacando todos los usuarios";
    // }
}