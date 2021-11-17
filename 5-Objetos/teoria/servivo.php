<?php
//
require_once "yanimal.php";


//ABSTRACTA
abstract class Servivo{
public $vivo;

abstract public function nutricion();
abstract public function reproduccion();
abstract public function relacion();

public function vivir(){
    $this->vivo = true;
}

public function matar(){
$this->vivo = false;
}
}

//CLASE
class Perro extends Servivo implements Yanimal{

private $nombre;

public function __construct($nombre) {
    $this->nombre = $nombre;
}

public function __call($name,$arguments) {
    $prefix_metodo = substr($name,0,3);

    if($prefix_metodo == 'get') {
        $nombre_metodo = substr(strtolower($name),0,3);

        if(!isset($this->$nombre_metodo)) {
            return "metodo no esxiste jefe";
        }
        return $this->$nombre_metodo.'<br>'; //this nombre es lo mismo
    
    }else{
        return "no existe jefe";
    }

}

public function nutricion(){
    echo "me nutro que rico";
}

public function reproduccion() { 
    echo "estoy fo****do jejejeje";
}

public function relacion() {
    echo "me relaciono no soy un otaku";
}

public function hablar() {
    echo "estoy hablando";
}

public function caminar() {
    echo "ando y ando";
}
}

//DECLARAR
$toby = new Perro("tobi");
var_dump($toby);
$toby->nutricion();
$toby->vivir();
var_dump($toby);
$toby->matar();
var_dump($toby);

// __call 
$doge = new Perro("dogee");
echo $doge->getNombre();