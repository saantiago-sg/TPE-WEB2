<?php
/* Smarty version 3.1.33, created on 2019-10-02 22:18:27
  from 'C:\xampp\htdocs\TPE-WEB2\templates\encode.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9506130dfe39_32305892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcf89f59bab9f01072f7b8c94d4496ef84ae52c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\encode.php',
      1 => 1570047504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9506130dfe39_32305892 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>require_once "noticias.tpl";
echo base64_encode($posteado['imagen']);
<?php echo '?>';
}
}
