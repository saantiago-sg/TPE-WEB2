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

function agregarNoticia($titulo,$descripcion,$fecha,$club,$imagen){
  $id_club=$this->obtenerID($club);
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

function borrarNoticia($id_club){
  $sentencia = $this->db->prepare("DELETE from noticia where id_noticia=(?)");
  $sentencia->execute(array($id_club));
}

function cambiar($id,$titulo,$descripcion,$fecha,$club,$imagen){
$id_club=$this->obtenerID($club);
$sentencia =$this->db->prepare("UPDATE noticia SET id_noticia='$id', id_club='$id_club', imagen='$imagen', titulo='$titulo', descripcion='$descripcion', fecha='$fecha' WHERE id_noticia=?");
$sentencia->execute(array($id));
}


function filtrarNoticia($filtro_ingresado){
  $id_club=$this->obtenerIDClub($filtro_ingresado);
  foreach ($id_club as $club) {
    $id_club=$club['id_club'];
  }


  $sentencia=$this->db->prepare("select * from noticia where id_club=?");
  $sentencia->execute(array($id_club));
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}

function obtenerIDClub($filtro_ingresado){
  $sentencia=$this->db->prepare("select * from club where nombre_club=?");
  $sentencia->execute(array($filtro_ingresado));
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}
}


?>