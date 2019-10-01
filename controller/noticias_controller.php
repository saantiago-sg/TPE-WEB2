<?php
require_once "./view/noticias_view.php";
require_once "./model/noticias_model.php";

class noticias_controller
{
    private $view;
    private $model;
    private $titulo;
    function __construct()
    {
        $this->view = new noticias_view();

        $this->model = new noticias_model();

    }

}






?>