<?php
/* Smarty version 3.1.39, created on 2021-11-24 03:50:58
  from 'C:\xampp\htdocs\TPE\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619da89216d2b6_70126952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94a067d391e6303f3d5cf9549537aa4aa97c7f6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\navbar.tpl',
      1 => 1637722255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619da89216d2b6_70126952 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="page/1">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="allCategories/">Categorias</a>
                </li>
                <?php if (!(isset($_smarty_tpl->tpl_vars['userName']->value))) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="login">Ingresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register">Registrarse</a>
                    </li>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['admin']->value))) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="users">Usuarios</a>
                    </li>
                <?php }?>

                <?php if ((isset($_smarty_tpl->tpl_vars['userName']->value))) {?>
                    <li class="nav-item">
                        <a class="nav-link disabled"><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout">Salir</a>
                    </li>
                <?php }?>

            </ul>
            <form class="d-flex" action="search" method="post">
                <input class="form-control me-2" name="search" id="search" type="search" placeholder="productos..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav><?php }
}
