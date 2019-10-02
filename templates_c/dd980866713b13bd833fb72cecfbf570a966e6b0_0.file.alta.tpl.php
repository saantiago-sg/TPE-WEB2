<?php
/* Smarty version 3.1.33, created on 2019-10-02 04:26:16
  from 'C:\xampp\htdocs\TPE-WEB2\templates\alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d940ac865c905_40766364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd980866713b13bd833fb72cecfbf570a966e6b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\alta.tpl',
      1 => 1569983150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d940ac865c905_40766364 (Smarty_Internal_Template $_smarty_tpl) {
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
