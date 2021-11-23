<?php
/* Smarty version 3.1.39, created on 2021-11-22 23:16:11
  from 'C:\xampp\htdocs\TPE\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c16abe77405_37632949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94a067d391e6303f3d5cf9549537aa4aa97c7f6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\navbar.tpl',
      1 => 1637619351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619c16abe77405_37632949 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light">


    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li><a class="navbar-brand" href="page/1">Inicio</a></li>
        <li><a class="navbar-brand" href="login">Ingresar</a></li>
        <li><a class="navbar-brand" href="register">Registrarse</a></li>
        <li><a class="navbar-brand" href="allCategories/">Todas las categorias</a></li>
        <?php if ((isset($_smarty_tpl->tpl_vars['admin']->value))) {?>
            <li><a class="navbar-brand" href="users">Usuarios</a></li>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['userName']->value))) {?>
            <li><a class="navbar-brand" href="page/1"><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
 </a></li>
            <li><a class="navbar-brand" href="logout">Salir </a></li>
        <?php }?>
    </ul>

</nav><?php }
}
