<?php
/* Smarty version 3.1.39, created on 2021-11-13 04:29:08
  from 'C:\xampp\htdocs\web-2_tpe\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618f31045be0c5_01140916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f2ee8c10308df8cec0b5743bd5b8b70aa5c315c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web-2_tpe\\templates\\navbar.tpl',
      1 => 1634250773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618f31045be0c5_01140916 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li><a class="navbar-brand" href="home">Inicio</a></li>
        <li><a class="navbar-brand" href="login">Ingresar</a></li>
        <li><a class="navbar-brand" href="register">Registrarse</a></li>
        <li><a class="navbar-brand" href="allCategories/">Todas las categorias</a></li>
        <?php if ((isset($_smarty_tpl->tpl_vars['email']->value))) {?>
        <li><a class="navbar-brand" href="logout">Salir </a></li>
        <?php }?>
    </ul>
</nav><?php }
}
