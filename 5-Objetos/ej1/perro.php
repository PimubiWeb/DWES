<?php
    class NombreClase {
        // Declaración de una propiedad
        public $variable = 'Un valor cualquiera';
        // Declaración de un método
        public function mostrarVariable(){
            echo $this->variable;
        }
    }

    class Perro {
        
        public string $tamanio;
        
        public function mostrar_propiedades(){
            echo $this->tamanio;
        }

    }

    $a = new Perro();
    $a->tamanio = 'XL';
    $var_dump(a);

?>