<?php
define ('login', "Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');

require_once "./view/noticias_view.php";
require_once "./model/noticias_model.php";
require_once "./view/login_view.php";
require_once "./model/login_model.php";
require_once "./controller/login_controller.php";

class seguro_controller{


    
        function __construct()
        {
            session_start();
            if(isset($_SESSION['usuario'])){
            }
            else{
                header(login);
            }
        }



}




?>