<?php
require_once "./view/noticias_view.php";
require_once "./model/noticias_model.php";
define('Home', "Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
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
    $imagen=$_POST['imagen'];
    $this->model->agregarNoticia($titulo,$descripcion,$fecha,$club,$imagen);
    header(Home);
}

function borrarNoticia($id_club){
$this->model->borrarNoticia($id_club);
header(Home);
}

function cambiar(){
    $id=$_POST['noticia'];
    $titulo=$_POST['titulo'];
    $descripcion=$_POST['descripcion'];
    $fecha=$_POST['fecha'];
    $club=$_POST['club'];
    $imagen=$_POST['imagen'];
    $this->model->cambiar($id, $titulo,$descripcion,$fecha,$club,$imagen);
    var_dump($id);
    header(Home);
}
function editarNoticia($id){
    $this->view->editar($id);
}

function filtrarNoticia(){
$filtro_ingresado=$_POST['filtro_ingresado'];
$noticia=$this->model->filtrarNoticia($filtro_ingresado);
$this->view->home($noticia);

}

}


?>