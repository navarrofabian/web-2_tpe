<?php
/* Smarty version 3.1.39, created on 2021-11-24 22:15:35
  from 'C:\xampp\htdocs\TPE\templates\vue\comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619eab77865e65_58862179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f69ff9b1b02d98bc6508b72543b71809831bfc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\vue\\comments.tpl',
      1 => 1637788533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619eab77865e65_58862179 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="app">
        <h1>{{ titulo }}</h1>
        <ul v-for="comment in comments" class="list-group list-group">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">{{comment.userName}}</div>
                    <p>{{comment.comment_content}}</p>
                    <small>{{comment.date}}</small>
                </div>
                <span class="badge bg-primary rounded-pill">{{comment.rating}}</span>
            </li>
        </ul>
    </div>

    <h3> Filtrar por puntaje </h3>

    <form id="form_filtro" class="col-md-6">
        <select name="rating" required class="form-control form-control-lg">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input id="filter" type="submit" value="Filtrar" class="btn btn-outline-success">
        <input id="getComm" type="submit" name="getComm" value="Mostrar todos" class="btn btn-light">
    </form>

    <h3> Ordenar por </h3>

    <form id="form_orden" class="col-md-6">
        <select name="sort" required class="form-control form-control-lg">
            <option class="fw-bold" selected value="">Atributo:</option>
            <option value="rating">Puntaje</option>
            <option value="date">Fecha</option>
        </select>
        <select name="order" required class="form-control form-control-lg">
            <option class="fw-bold" selected value="">Orden:</option>
            <option value="asc">Ascendente</option>
            <option value="desc">Descendente</option>

        </select>
        <input id="orderBy" type="submit" value="Ordenar" class="btn btn-outline-success">

    </form>



<?php }
}
