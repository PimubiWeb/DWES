<?php

interface Ordenador{
public function encender();
public function apagar();
public function reiniciar();
public function desfragmentar();
public function detectaruse();
}


class imac implements Ordenador{
private $modelo;

function getmodelo() {
    return $this->modelo;
}

function setModelo($modelo) {
    $this->modelo = $modelo;
}

public function encender() {
    return "ENCENDIDO";
}


public function apagar() {
    return "APAGADO";
}


public function reiniciar(){
    return "REINICIADO";
}

public function desfragmentar() {
    return "DESFRAGMENTADO";
}


public function detectaruse() {
    return "DETECTADO USB";

}
}