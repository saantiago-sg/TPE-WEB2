<?php


require_once "./view/login_view.php";
require_once "./model/login_model.php";
require_once "./controller/seguro_controller.php";

class login_controller extends seguro_controller{

    private $view;
    private $model;
    
    function __construct()
    {
        parent::__construct();

        $this->view = new login_view();

        $this->model = new login_model();
    }

    function login(){
       
        $this->view->mostrarLogin();
    }

    function verificarLogin(){
        $usuario = $_POST['usuarioId'];
        $contraseña = $_POST['contraseñadId'];

        $hash = password_hash($contraseña, PASSWORD_DEFAULT);

        $dbUsuario = $this->model->getUsuario($usuario);

        if(isset($dbUsuario)){
            if(password_verify($hash, $dbUsuario[0]["contraseña"])){ //el 0 va por la posicion del arreglo

                session_start();
                $_SESSION["usuario"] = $usuario;

                header(home);
            }
            else{
                $this->view->mostrarLogin("Contraseña incorrecta");  
            }

        }else{
            $this->view->mostrarLogin("NO EXISTE EL USUARIO");
        }

    }


}

?>