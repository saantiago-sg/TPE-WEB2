<?php
/* Smarty version 3.1.33, created on 2019-10-04 01:40:30
  from 'C:\xampp\htdocs\TPE-WEB2\templates\alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9686ee4d5b79_71441281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd980866713b13bd833fb72cecfbf570a966e6b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\alta.tpl',
      1 => 1570146029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9686ee4d5b79_71441281 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="abm">
<form action="agregar" method="post" enctype="multipart/form-data">
<div class="container">
  <div class="form-group">
  <label for="exampleFormControlFile1" class="mt-3" >Titulo de la noticia</label>
  <input class="form-control" type="text" name="titulo">
  <label for="exampleFormControlFile1" class="mt-3" >Descripcion de la noticia</label>
  <input class="form-control" type="text" name="descripcion">
  <label for="exampleFormControlFile1" class="mt-3" >Fecha de publicacion</label>
  <input class="form-control" type="date" name="fecha">
  <label for="exampleFormControlFile1" class="mt-3" >Club al que pertenece</label>
  <input class="form-control" type="text" name="club">
  <label for="exampleFormControlFile1" class="mt-3" >Nombre de la imagen</label>
  <input class="form-control" type="text" name="imagen">
  </div>
  <button type="submit" class="btn btn-danger mb-2">Subir</button>
</form>
</div><?php }
}
