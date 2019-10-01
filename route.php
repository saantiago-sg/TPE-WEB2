<?php

require_once "./controller/trabajoController.php";

$partesURL = explode('/', $_GET['action']);
$controller = new trabajoController();

if ($partesURL[0] == '') {
  $controller->home();
}else{
if ($partesURL[0] == 'insertarTarea') {
  $controller->insertarTarea();
}
elseif($partesURL[0] == 'montoTotal'){
  $controller->montoTotal();
}
}

 ?>
