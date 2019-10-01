<?php

require_once "./controller/noticias_controller.php";

$partesURL = explode('/', $_GET['action']);
$controller = new noticias_controller();

if ($partesURL[0] == '') {
}
 ?>
