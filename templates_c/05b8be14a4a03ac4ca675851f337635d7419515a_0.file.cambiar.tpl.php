<?php
/* Smarty version 3.1.33, created on 2019-10-05 00:35:55
  from 'C:\xampp\htdocs\TPE-WEB2\templates\cambiar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d97c94b290c58_42960240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05b8be14a4a03ac4ca675851f337635d7419515a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\cambiar.tpl',
      1 => 1570228534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d97c94b290c58_42960240 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Oscurin</title>
</head>
<body>
<div class="abm">
<form action="cambiar" method="post">
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
  <button type="submit" class="btn btn-danger mb-2">cambiar</button>
  
</form>
</div>

<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
