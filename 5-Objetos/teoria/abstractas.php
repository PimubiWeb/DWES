<?php
/*la clase abstracta no se puede usar para instanciar objetos
* la usaremos para heredar de ella y define la estructura de la clase que la hereda y funcionalidad

* Cada método definido en la abstracta será definido en la clase hija
*/

abstract class Ordenador{
public $encendido;

abstract public function encender(); //por ser abstracta la defino,
// pero no puedo darle funcionalidad
// lo hago en la clase hija donde será obligatorio el método

public function apagar(){
$this->encendido = false;
}
}

class PcAsus extends Ordenador{
public $software;

public function arrancarsoftware(){
$this->software = true;
}

public function encender() { //aquí le doy mi funcionalidad
$this->encendido = true;
}
}

$ordenador = new PcAsus();
var_dump($ordenador);
$ordenador->arrancarSoftware();
$ordenador->encender();
var_dump($ordenador);
$ordenador->apagar();
var_dump($ordenador);