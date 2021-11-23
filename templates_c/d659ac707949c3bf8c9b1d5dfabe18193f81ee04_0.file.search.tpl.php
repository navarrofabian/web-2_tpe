<?php
/* Smarty version 3.1.39, created on 2021-11-22 23:50:37
  from 'C:\xampp\htdocs\TPE\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c1ebd0368c5_71508372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd659ac707949c3bf8c9b1d5dfabe18193f81ee04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\search.tpl',
      1 => 1637621435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619c1ebd0368c5_71508372 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="d-flex" action="order" method="POST">
    <select class="form-select" aria-label="Default select example">
        <option selected>Ordenar por:</option>
        <option value="id">Antiguedad</option>
        <option value="rating">Puntaje</option>
    </select>
    <select class="form-select" name="order" id="order" placeholder="order" aria-label="Default select example">>
        <option selected>Elegir orden:</option>
        <option value="ASC">Ascendente</option>
        <option value="DESC">Descendente</option>
    </select>



    <button type="button" class="btn btn-dark">Ordenar</button>
</form><?php }
}
