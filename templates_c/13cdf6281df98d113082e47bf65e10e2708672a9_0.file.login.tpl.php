<?php
/* Smarty version 3.1.33, created on 2019-10-12 01:49:56
  from 'C:\xampp\htdocs\proyectos\1-TPe-FINAL\TPE-WEB2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da11524c08276_59135629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13cdf6281df98d113082e47bf65e10e2708672a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\1-TPe-FINAL\\TPE-WEB2\\templates\\login.tpl',
      1 => 1570837783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da11524c08276_59135629 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Oscurin</title>
</head>
<body>
<div class="container">

<form method="post" action="verificarLogin">

  <div class="form-group mx-sm-3 mb-2 my-2">
    <label for="staticEmail2" class="sr-only">Usuario</label>
    <input type="input" class="form-control" name="usuarioId" id="usuarioId" value="email@ejemplo.com">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Contraseña</label>
    <input type="password" class="form-control" name="contraseñadId" id="contraseñadId" placeholder="contraseña">
  </div>

  <div>
  <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

  </div>
   
  <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
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
