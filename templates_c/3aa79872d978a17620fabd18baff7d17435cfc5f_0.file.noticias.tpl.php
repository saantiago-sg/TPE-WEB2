<?php
/* Smarty version 3.1.33, created on 2019-10-08 21:08:59
  from 'C:\xampp\htdocs\TPE-WEB2\templates\noticias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9cdecb21d045_60852204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3aa79872d978a17620fabd18baff7d17435cfc5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\noticias.tpl',
      1 => 1570561666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9cdecb21d045_60852204 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="text-center fondo-ultimas-noticias pr-3 pl-3 pb-3 pt-0 pt-3">
<h2 class="h2-responsive font-weight-bold mb-5 titulo-fondo py-3 w-100 text-white">Ultimas Noticias</h2>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['noticia']->value, 'posteado');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['posteado']->value) {
?>
            
                <article class="row">
                    <div class="col-lg-12">
                    <h3 class="font-weight-bold mb-3"><strong><?php echo $_smarty_tpl->tpl_vars['posteado']->value['titulo'];?>
</strong></h3>
                        <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
                        <img width=100%; src="./img/<?php echo $_smarty_tpl->tpl_vars['posteado']->value['imagen'];?>
.jpg" alt="">
                        </div>
                    </div>
                <div class="col-lg-12">
                    <p><?php echo $_smarty_tpl->tpl_vars['posteado']->value['descripcion'];?>
</p>
                    <p>Fecha : <?php echo $_smarty_tpl->tpl_vars['posteado']->value['fecha'];?>
</p>
                    <a href="borrar/<?php echo $_smarty_tpl->tpl_vars['posteado']->value['id_noticia'];?>
" class="btn btn-danger btn-md text-white">Borrar</a>
                    <a href="editar/<?php echo $_smarty_tpl->tpl_vars['posteado']->value['id_noticia'];?>
" class="btn btn-info btn-md text-white">Editar</a>
                </div>
                </article>      
            <hr class="my-5">
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section><?php }
}
