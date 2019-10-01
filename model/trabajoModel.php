<?php

class trabajoModel
{
  private $db;

    function __construct()
    {
      $this->db = new PDO(
        'mysql:host=localhost;'
          . 'dbname=db_seguro;charset=utf8',
        'root',
        '');
    }

    function getTareas(){
              $sentencia = $this->db->prepare('SELECT a.nombreApellido, a.fechaPago, a.id_cliente, b.precio_final, b.id FROM tareas a, precio b WHERE a.id_cliente=b.id');
              $sentencia->execute();
            
              return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
    function mostrarTarea($nombre, $cuota, $cuotaCapital, $vencimiento, $fechaPago, $interes, $pago){
      $sentencia = $this->db->prepare("INSERT INTO tareas(nombreApellido, cuota, cuotaCapital, vencimiento, fechaPago, interes, pagado) VALUES(?,?,?,?,?,?,?)");
      $sentencia->execute(array($nombre, $cuota, $cuotaCapital, $vencimiento, $fechaPago, $interes, $pago));
    }

// ---------------------------------------------------------------------- //

    function getTotal(){
      $sentencia =$this->db->prepare("select * from precio");
      $sentencia->execute();
    
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function insertarTotal( $precioFinal, $pagado){
      $sentencia = $this->db->prepare("INSERT INTO precio(precio_final, pagado) VALUES(?,?)");
      $sentencia->execute(array( $precioFinal, $pagado));
    }

}


?>