<?php

define ('Logout', "Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');

define('Home', "Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]).'/');

define ('Login', "Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');


require_once "./controller/noticias_controller.php";
require_once "./controller/login_controller.php";
require_once "./controller/seguro_controller.php";

$partesURL = explode('/', $_GET['action']);

$controller = new noticias_controller();
$login_controller = new login_controller();
$seguro_controller= new seguro_controller();

if ($partesURL[0] == '') {
    $controller->home();
}
elseif($partesURL[0]=='agregar'){
    $controller->agregarNoticia();
   }
elseif($partesURL[0]=='borrar'){
    $controller->borrarNoticia($partesURL[1]);
   }
elseif(($partesURL[0]=='editar')&&($partesURL[1]=='cambiar')){
       $controller->cambiar();
       }  
elseif($partesURL[0]=='editar'){
    $controller->editarNoticia($partesURL[1]);
    }
elseif($partesURL[0]=='filtrar'){
    $controller->filtrarNoticia();
    }
elseif($partesURL[0]=='login'){
    $login_controller->login();
}
elseif($partesURL[0]==''){
    $login_controller->verificarLogin();
}
?>
