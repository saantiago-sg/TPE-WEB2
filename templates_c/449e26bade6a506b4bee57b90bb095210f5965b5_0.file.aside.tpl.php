<?php
/* Smarty version 3.1.33, created on 2019-10-10 23:32:44
  from 'C:\xampp\htdocs\proyectos\1-TPe-FINAL\TPE-WEB2\templates\aside.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9fa37c356d67_46048183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '449e26bade6a506b4bee57b90bb095210f5965b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\1-TPe-FINAL\\TPE-WEB2\\templates\\aside.tpl',
      1 => 1570742535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9fa37c356d67_46048183 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table small table-sm" id="tabla">
                    <thead class="fondo-tabla text-white">
                        <tr>
                            <th>#</th>
                            <th>Club</th>
                            <th>PJ</th>
                            <th>G</th>
                            <th>E</th>
                            <th>P</th>
                            <th>Pts</th>
                        </tr>
                    </thead>
                    <tbody id="infoTabla">
                        
                    </tbody>

                    <tfoot>
                        <tr>
                            <td><button type="submit" class="btn btn-light" id="btnAgregar"><img src="img/icoAdd.png"
                                        alt=""></button></td>
                            <td><input type="text" class="form-control" id="club" placeholder="Club"></td>
                            <td><input type="text" class="form-control" id="pj" placeholder="PJ"></td>
                            <td><input type="text" class="form-control" id="ganados" placeholder="PG"></td>
                            <td><input type="text" class="form-control" id="empatados" placeholder="PE"></td>
                            <td><input type="text" class="form-control" id="perdidos" placeholder="PP"></td>
                            <td><input type="text" class="form-control" id="pts" placeholder="PTS"></td>
                        </tr>
                    </tfoot>
                </table><?php }
}
