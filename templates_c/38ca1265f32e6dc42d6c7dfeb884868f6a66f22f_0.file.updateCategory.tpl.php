<?php
/* Smarty version 3.1.39, created on 2021-10-15 01:19:16
  from 'C:\xampp\htdocs\TPE\templates\updateCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168baf4a63608_03688668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38ca1265f32e6dc42d6c7dfeb884868f6a66f22f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\updateCategory.tpl',
      1 => 1634253555,
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
function content_6168baf4a63608_03688668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\TPE\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID Category</th>
                <th>Category Type</th>
                <th>Brand</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['Category']->value->id_category;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['Category']->value->type_category;?>
</td>
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['Category']->value->brand,30);?>
</td>
            </tr>
        </tbody>
    </table>
</div>
<?php if ((isset($_smarty_tpl->tpl_vars['email']->value))) {?>
    <div class="container-fluid">
        <h4>Añadir Nueva Categoria:</h4>
        <form class="form-alta" action="./updateCategory/<?php echo $_smarty_tpl->tpl_vars['Category']->value->id_category;?>
" method="post">
            <div class="form-group">
                <label for="model">Modelo</label>
                <input type="number" class="form-control" name="id_category" id="id_category" required
                    placeholder="Nuevo ID">
            </div>
            <div class="form-group">
                <label for="description">Descripcion</label>
                <input type="text" class="form-control" name="type_category" id="type_category" required
                    placeholder="Nuevo Tipo de categoria">
            </div>
            <div class="form-group">
                <label for="price">Precio</label>
                <input type="text" class="form-control" name="brand" id="brand" required placeholder="Nueva Marca">
            </div>
            <button type="submit" class="btn btn-warning">Editar</button>
        </form>
    </div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
