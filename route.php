<?php

require_once "./controller/noticias_controller.php";

$partesURL = explode('/', $_GET['action']);
$controller = new noticias_controller();

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
?>
