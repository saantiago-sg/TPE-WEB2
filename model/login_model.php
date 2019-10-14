<?php

class login_model
{
  private $db;

    function __construct()
    {
      $this->db = new PDO(
        'mysql:host=localhost;'
          . 'dbname=db_noticias;charset=utf8',
        'root',
        '');
    }

    function getUsuario($usuario){

        $sentencia = $this->db->prepare("select * from usuario where usuarios=? limit 1");
        $sentencia->execute(array($usuario));
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>