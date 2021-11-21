<?php
/* Smarty version 3.1.39, created on 2021-11-21 00:24:00
  from 'C:\xampp\htdocs\TPE\templates\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61998390a50ca1_89102690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc31b44d2167e9ad2d4cdc205553b9d0bbe4edb2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\users.tpl',
      1 => 1637450639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/navbar.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61998390a50ca1_89102690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre de usuario</th>
                <th>Email</th>
                <th>Permisos de Administrador</th>
                <th>Eliminar Usuarios</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->userName;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
                    <!--verificar si el user->admin es true y mostrar -->
                    <td><?php if ($_smarty_tpl->tpl_vars['user']->value->admin == 1) {?>
                            <a href="editAccess/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
">
                                <button type="button" class="btn btn-success">
                                    <i class="fas fa-check"></i>
                                </button>
                            </a>
                    </td>

                    <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->admin == 0) {?>
                            <a href="editAccess/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
">
                                <button type="button" class="btn btn-danger">
                                    <i class="fas fa-times"></i>
                                </button>
                            </a>
                    </td>
                    <td>
                            <a href="deleteUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
">
                            <button type="button" class="btn btn-outline-danger">Eliminar</button>
                        </a>
                    </td>
                        <?php }?>
                    

                   
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
