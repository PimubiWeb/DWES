<?php


class Pedido{
   private $id;
   private $usuario_id;
   private $provincia;
   private $localidad;
   private $direccion;
   private $coste;
   private $estado;
   private $fecha;
   private $hora;
   private $db;

   public function __construct(){
       $this->db = Database::connect();
   }

    function setId($id){
        $this->id = $id;
    }

    function setUsuarioId($usuario_id){
        $this->usuario_id = $usuario_id;
    }

    function setProvincia($provincia){
        $this->provincia = $this->db->real_escape_string($provincia);
    }

    function setLocalidad($localidad){
        $this->localidad = $this->db->real_escape_string($localidad);
    }

    function setDireccion($direccion){
        $this->direccion = $this->db->real_escape_string($direccion);
    }

    function setPrecio($precio){
        $this->precio = $this->db->real_escape_string($precio);
    }

    function setCoste($coste){
        $this->coste = $coste;
    }

    function setEstado($estado){
        $this->estado = $this->db->real_escape_string($estado);
    }

    function setFecha($fecha){
        $this->fecha = $fecha;
     }

     function setHora($hora){
        $this->hora = $hora;
     }

     function getId(){
        return $this->id;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getUsuarioId(){
        return $this->usuario_id;
    }
    
    function getProvincia(){
        return $this->provincia;
    }

    function getLocalidad(){
        return $this->localidad;
    }

    function getDireccion(){
        return $this->direccion;
    }


    function getPrecio(){
        return $this->precio;
    }

    function getCoste(){
        return $this->coste;
    }

    function getEstado(){
        return $this->estado;
    }
    function getFecha(){
        return $this->fecha;
    }

    function getHora(){
        return $this->hora;
    }

    public function getAll(){
        $productos = $this->db->query("SELECT * FROM pedidos ORDER BY id DESC;");
        return $productos;
    }



    public function getOne(){
        $producto = $this->db->query("SELECT * FROM pedidos WHERE id = {$this->getId()};");
        return $producto->fetch_object();
    }

    public function getOneByUser(){
        $sql = "SELECT p.id, p.coste FROM pedidos p ";
        $sql .= "INNER JOIN lineas_pedido lp ON lp.pedido_id = p.id ";
        $sql .= "WHERE p.usuario_id = {$this->getUsuarioId()} ORDER BY p.id DESC LIMIT 1;";
       
       
        $pedido = $this->db->query($sql);
        
        return $pedido->fetch_object();
    }

    public function getAllByUser(){
        $sql = "SELECT p.* FROM pedidos p ";
        $sql .= "WHERE p.usuario_id = {$this->getUsuarioId()} ORDER BY p.id DESC;";
              
        $pedido = $this->db->query($sql);
        
        return $pedido;
    }

    public function getProductosByPedido($id){
       // $sql = "SELECT * FROM productos WHERE id IN ";
        //$sql .= "(SELECT producto_id FROM lineas_pedido WHERE pedido_id={$id});";

        $sql = "SELECT pr.*, lp.unidades FROM productos pr ";
        $sql .= "INNER JOIN lineas_pedido lp ON pr.id=lp.producto_id ";
        $sql .= "WHERE lp.pedido_id={$id}";


        $productos = $this->db->query($sql);

        return $productos;

    }


    public function save(){
        $sql = "INSERT INTO pedidos VALUES(NULL, {$this->getUsuarioId()} , '{$this->getProvincia()}', '{$this->getLocalidad()}' , '{$this->getDireccion()}' ,{$this->getCoste()} , 'confirm',curdate() , curtime());";
        $save = $this->db->query($sql);
        
        $result = false;
        if($save){
            $result = true;
        }
        return $result;

    }

    public function save_linea(){
        $sql = "SELECT LAST_INSERT_ID() as 'pedido';";
        $query = $this->db->query($sql);
        $pedido_id = $query->fetch_object()->pedido;

        foreach($_SESSION['carrito'] as $indice => $elemento){
            $producto = $elemento['producto'];

            $insert = "INSERT INTO lineas_pedido VALUES(null, $pedido_id, {$producto->id}, {$elemento['unidades']}) ;";
            $save = $this->db->query($insert);

        }

        //var_dump($pedido_id);

        $result = false;
        if($save){
            $result = true;
        }
        return $result; 
    }

    public function edit(){
        //$sql = "UPDATE productos SET categoria_id='{$this->getCategoriaId()}', nombre='{$this->getNombre()}', desripcion='{$this->getDescripcion()}', precio={$this->getPrecio()}, stock={$this->getStock()}";
        $sql = "UPDATE `pedidos` SET `estado`='{$this->getEstado()}'";
  
        $sql .= " WHERE `id` = {$this->getId()};";

        
        $save = $this->db->query($sql);
        
        
        $result = false;
        if($save){
            $result = true;
        }
        return $result;

    }

}

/* 
   private $id;
   private $usuario_id;
   private $provincia;
   private $localidad;
   private $direccion;
   private $coste;
   private $estado;
   private $fecha;
   private $hora; */

