<?php

require_once "./view/noticias_view.php";
require_once "./model/noticias_model.php";
require_once "./view/login_view.php";
require_once "./model/login_model.php";
require_once "./controller/login_controller.php";
require_once "seguro_controller.php";



class noticias_controller extends seguro_controller
{
    private $view;
    private $model;
    
    function __construct()
    {
        parent::__construct();    //llamo al construct de seguro controller 

        $this->view = new noticias_view();

        $this->model = new noticias_model();

    }

    function home(){
        session_start();
        if(isset($_SESSION['usuario'])){
            

        $noticia=$this->model->obtenerNoticias();
        $this->view->home($noticia);
    }
    else{
        header(login);
    }
    }


function agregarNoticia(){
    $titulo=$_POST['titulo'];
    $descripcion=$_POST['descripcion'];
    $fecha=$_POST['fecha'];
    $club=$_POST['club'];
    $imagen=$_POST['imagen'];
    $this->model->agregarNoticia($titulo,$descripcion,$fecha,$club,$imagen);
    header(home);
}

function borrarNoticia($id_club){
$this->model->borrarNoticia($id_club);
header(home);
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
    header(home);
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