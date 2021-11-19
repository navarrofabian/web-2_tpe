<?php
/* Smarty version 3.1.39, created on 2021-11-19 15:57:19
  from 'C:\xampp\htdocs\TPE\templates\detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6197bb4f8f87c7_47731748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a11c8b073d45b224e2de952570253ba3547daeac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\detail.tpl',
      1 => 1637333837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/navbar.tpl' => 1,
    'file:templates/vue/comments.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6197bb4f8f87c7_47731748 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\TPE\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Model</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->model;?>
</td>
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value->descriptions,30);?>
</td>
                <td>$<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</td>
                <td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value->id_category == $_smarty_tpl->tpl_vars['category']->value->id_category) {
echo $_smarty_tpl->tpl_vars['category']->value->type_category;?>
</a>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php if ((isset($_smarty_tpl->tpl_vars['userName']->value))) {?>
    <div class="container-fluid">
        <h4>Editar Producto: <?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</h4>
        <form class="form-alta" action="./updateProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
" method="post">
            <div class="form-group">
                <label for="model">Modelo</label>
                <input type="text" class="form-control" name="model" id="model" required placeholder="Nuevo modelo">
            </div>
            <div class="form-group">
                <label for="description">Descripcion</label>
                <input type="text" class="form-control" name="descriptions" id="descriptions" required
                    placeholder="Nueva descrpcion">
            </div>
            <div class="form-group">
                <label for="price">Precio</label>
                <input type="number" class="form-control" name="price" id="price" required placeholder="Nuevo valor">
            </div>
            <div class="form-group">
                <select name="id_category" id="id_category" placeholder="category" required>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                        <option value=<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
><?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
/<?php echo $_smarty_tpl->tpl_vars['category']->value->type_category;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>

            <input type="submit" class="btn btn-primary" value="Confirm Edit">
        </form>
    </div>
<?php }?>
    <div class="container">
    
        <div class="row mt-4">
        <?php if ((isset($_smarty_tpl->tpl_vars['userName']->value))) {?>
            <div class="col-md-4">
                <h2>Comentar</h2>
                <form id="formComment">
                    <input placeholder="comment_id" type="text" name="comment_id" id="comment_id">
                    <input placeholder="rating_id" type="number" name="rating_id" id="rating_id">
                    <input placeholder="id_product" type="number" name="id_product" id="id_product" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
">
                    <input placeholder="id_user" type="number" name="id_user" id="id_user">
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </form>
            </div>
        <?php }?>
            <div class="col-md-8">
                <?php $_smarty_tpl->_subTemplateRender('file:templates/vue/comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    

    </div>

    <?php echo '<script'; ?>
 src="js/Comments.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
