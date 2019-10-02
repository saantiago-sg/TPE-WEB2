<?php

class noticias_model
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


function obtenerNoticias(){
  $sentencia=$this->db->prepare("select * from noticia");
  $sentencia->execute();
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}

function agregarNoticia($titulo,$descripcion,$fecha,$club/*,$imagen*/){
  $id_club=$this->obtenerID($club);
  $imagen="";
  $sentencia = $this->db->prepare("INSERT INTO noticia(id_club,imagen,titulo,descripcion,fecha) VALUES(?,?,?,?,?)");
  $sentencia->execute(array($id_club, $imagen,$titulo,$descripcion,$fecha));
}

function obtenerID($clubIngresado){
  $sentencia=$this->db->prepare("select * from club");
  $sentencia->execute();
  $club=$sentencia->fetchAll(PDO::FETCH_ASSOC);
  foreach ($club as $clubes) {
    if($clubes["nombre_club"]==$clubIngresado){
      return $clubes["id_club"];
    }
  }
  $this->crearClub($clubIngresado);
  return ($this->obtenerID($clubIngresado));


}

function crearClub($clubIngresado){
  $sentencia = $this->db->prepare("INSERT INTO club(nombre_club) VALUES(?)");
  $sentencia->execute(array($clubIngresado));

}

}


?>