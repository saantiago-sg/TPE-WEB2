<?php
require_once "./view/noticias_view.php";
require_once "./model/noticias_model.php";

class noticias_controller
{
    private $view;
    private $model;
    
    function __construct()
    {
        $this->view = new noticias_view();

        $this->model = new noticias_model();

    }

    function home(){
        $noticia=$this->model->obtenerNoticias();
        $this->view->home($noticia);
    }


function agregarNoticia(){
    $titulo=$_POST['titulo'];
    $descripcion=$_POST['descripcion'];
    $fecha=$_POST['fecha'];
    $club=$_POST['club'];
    // $imagen=$_POST['imagen'];
    $this->model->agregarNoticia($titulo,$descripcion,$fecha,$club/*,$imagen*/);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
}
}
?>