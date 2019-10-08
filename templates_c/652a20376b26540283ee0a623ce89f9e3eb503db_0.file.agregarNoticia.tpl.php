<?php
/* Smarty version 3.1.33, created on 2019-10-05 03:46:23
  from 'C:\xampp\htdocs\TPE-WEB2\templates\agregarNoticia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d97f5ef29f634_00579473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '652a20376b26540283ee0a623ce89f9e3eb503db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\agregarNoticia.tpl',
      1 => 1570239982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d97f5ef29f634_00579473 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="abm">
<form action="agregar" method="post">
<h5 class="h5-responsive font-weight-bold text-center titulo-fondo py-2 w-100 text-white">Agregar una noticia</h5>
  <div class="form-group small">
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
  <button type="submit" class="btn btn-danger mb-2">Crear</button>
</form>

</div><?php }
}
