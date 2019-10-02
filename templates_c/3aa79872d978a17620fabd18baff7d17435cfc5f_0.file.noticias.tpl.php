<?php
/* Smarty version 3.1.33, created on 2019-10-02 04:23:30
  from 'C:\xampp\htdocs\TPE-WEB2\templates\noticias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d940a2272ddd3_47527635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3aa79872d978a17620fabd18baff7d17435cfc5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\noticias.tpl',
      1 => 1569982883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d940a2272ddd3_47527635 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['noticia']->value, 'posteado');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['posteado']->value) {
?>
            <h2 class="h2-responsive font-weight-bold text-center mb-5 titulo-fondo py-3 w-100 text-white"><?php echo $_smarty_tpl->tpl_vars['posteado']->value['titulo'];?>
</h2>
                <article class="row">
                    <div class="col-lg-3">
                        <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
                          <img class="img-fluid" src="img/noticia.jpg" alt="Sample image">
                        </div>
                    </div>
                <div class="col-lg-9">
                    <h3 class="font-weight-bold mb-3"><strong><?php echo $_smarty_tpl->tpl_vars['posteado']->value['titulo'];?>
</strong></h3>
                    <p><?php echo $_smarty_tpl->tpl_vars['posteado']->value['descripcion'];?>
</p>
                    <p><?php echo $_smarty_tpl->tpl_vars['posteado']->value['fecha'];?>
</p>
                    <a class="btn btn-info btn-md text-white">Leer Mas</a>
                </div>
                </article>      
            <hr class="my-5">
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section><?php }
}
