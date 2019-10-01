<?php
require_once "./view/trabajoView.php";
require_once "./model/trabajoModel.php";


class trabajoController
{
    private $view;
    private $model;
    private $titulo;

    function __construct()
    {
        $this->view = new trabajoView();

        $this->model = new trabajoModel();

        $this->titulo = "Santiago Seguros";
    }

    function home(){
        $cosas = $this->model->getTareas();
        $total = $this->model->getTotal();
        $this->view->mostrar($this->titulo, $cosas, $total);
    }

    function insertarTarea(){
        $nombre = $_POST["nombreApellido"];
        $cuota = $_POST["cuota"];
        $cuotaCapital = $_POST["cuotaCapital"];
        $vencimiento = $_POST["vencimiento"];
        $fechaPago = $_POST["fechaPago"];
        $interes = $_POST["interes"];

        if(isset($_POST['pago'])){
            $pago =1;
        }
        else{
            $pago = 0;
        }
        $this->model->mostrarTarea($nombre, $cuota, $cuotaCapital, $vencimiento, $fechaPago, $interes, $pago); //le paso los valores que tengo q insertar
        header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    }

    function montoTotal(){
        $precioFinal= $_POST['precio_final'];

        if(isset($_POST['pagado'])){
            $pagado =1;
        }
        else{
            $pagado = 0;
        }
        $this->model->insertarTotal($precioFinal, $pagado); //le paso los valores que tengo q insertar
        header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    }

}






?>