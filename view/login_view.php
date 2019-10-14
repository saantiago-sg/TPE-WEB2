<?php

require_once('libs/Smarty.class.php');

class login_view 
{    
   function home($noticia){
       $smarty = new Smarty();
       $smarty->assign('noticia',$noticia);
       $smarty->display('templates/home.tpl');
    }
    function editar($id_noticia){
        $smarty= new Smarty();
        $smarty->assign('noticia',$id_noticia);
        $smarty->display('templates/editar.tpl');
    }

    function mostrarLogin($mensaje= ''){
        $smarty= new Smarty();
        $smarty->assign('mensaje',$mensaje);
        $smarty->display('templates/login.tpl');
    }
}