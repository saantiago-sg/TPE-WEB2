<?php

require_once('libs/Smarty.class.php');
class noticias_view 
{    
   function home($noticia){
       $smarty = new Smarty();
       $smarty->assign('noticia',$noticia);
       $smarty->display('templates/home.tpl');
    }
      
}


