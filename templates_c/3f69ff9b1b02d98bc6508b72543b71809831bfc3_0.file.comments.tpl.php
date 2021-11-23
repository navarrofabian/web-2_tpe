<?php
/* Smarty version 3.1.39, created on 2021-11-23 05:58:49
  from 'C:\xampp\htdocs\TPE\templates\vue\comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c75092f0380_24069612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f69ff9b1b02d98bc6508b72543b71809831bfc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\vue\\comments.tpl',
      1 => 1637643393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619c75092f0380_24069612 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <h3> Filtrar por puntaje </h3>

    <form id="form_filtro">
        <select name="rating" required class="form-control form-control-lg">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input id ="filter" type="submit" class="btn btn-primary">
    </form>
        <a v-on:click="getComm" class="btn btn-primary">Mostrar todos</a>
    
    <h3> Ordenar por </h3>
    
    <form id="form_orden">
        <select name="sort" required class="form-control form-control-lg">
            <option value="id_comment">Fecha</option>
            <option value="rating">Puntaje</option>
        </select>
        <select name="order" required class="form-control form-control-lg">
            <option value="asc">Ascendente</option>
            <option value="desc">Descendente</option>
        </select>
        <input id="orderBy" type="submit" class="btn btn-primary">
    </form>

    <div id="app">
        <h1>{{ titulo }}</h1>

        <ul id="lista-tareas" class="list-group">
            <li v-for="comment in comments" class="list-group-item">
            id_comment :  {{comment.id_comment}} -- comentario:  {{comment.comment_content}} -- puntaje : {{comment.rating}} -- id producto : {{comment.id_product}} --id usuario : {{comment.id_user}} -- nombre :  {{comment.userName}}

            </li>
        </ul>
    </div>
<?php }
}
