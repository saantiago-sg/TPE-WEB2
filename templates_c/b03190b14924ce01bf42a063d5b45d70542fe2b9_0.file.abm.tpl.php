<?php
/* Smarty version 3.1.33, created on 2019-10-02 04:23:30
  from 'C:\xampp\htdocs\TPE-WEB2\templates\abm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d940a226e6065_82000839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b03190b14924ce01bf42a063d5b45d70542fe2b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\abm.tpl',
      1 => 1569982984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d940a226e6065_82000839 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="abm">
<form action="agregar" method="post">
<div class="container">
  <div class="form-group">
  <input class="form-control mt-3" type="text" placeholder="Titulo Noticia" name="titulo">
  <input class="form-control mt-3" type="text" placeholder="Descripcion Noticia" name="descripcion">
  <input class="form-control mt-3" type="date" name="fecha">
  <input class="form-control mt-3" type="text" placeholder="Club" name="club">
  <label for="exampleFormControlFile1" class="mt-3" >Subir Imagen</label>
  <input type="file" class="form-control-file" name="imagen">
  </div>
  <button type="submit" class="btn btn-danger mb-2">Subir</button>
</form>
</div><?php }
}
