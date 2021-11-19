<?php
/* Smarty version 3.1.39, created on 2021-11-19 18:01:21
  from 'C:\xampp\htdocs\TPE\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6197d861c1c8d8_13619148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94a067d391e6303f3d5cf9549537aa4aa97c7f6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\navbar.tpl',
      1 => 1637341279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6197d861c1c8d8_13619148 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li><a class="navbar-brand" href="home">Inicio</a></li>
        <li><a class="navbar-brand" href="login">Ingresar</a></li>
        <li><a class="navbar-brand" href="register">Registrarse</a></li>
        <li><a class="navbar-brand" href="allCategories/">Todas las categorias</a></li>
        <?php if ((isset($_smarty_tpl->tpl_vars['admin']->value))) {?>
            <li><a class="navbar-brand" href="#">Usuarios</a></li>   
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['userName']->value))) {?>
            <li><a class="navbar-brand" href="home"><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
 </a></li>
            <li><a class="navbar-brand" href="logout">Salir </a></li>      
        <?php }?>
    </ul>
</nav><?php }
}
