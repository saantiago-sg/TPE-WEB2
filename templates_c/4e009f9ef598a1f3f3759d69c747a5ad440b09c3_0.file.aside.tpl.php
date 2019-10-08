<?php
/* Smarty version 3.1.33, created on 2019-10-05 03:30:12
  from 'C:\xampp\htdocs\TPE-WEB2\templates\aside.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d97f224af95e7_49816026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e009f9ef598a1f3f3759d69c747a5ad440b09c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\aside.tpl',
      1 => 1570238989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d97f224af95e7_49816026 (Smarty_Internal_Template $_smarty_tpl) {
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
