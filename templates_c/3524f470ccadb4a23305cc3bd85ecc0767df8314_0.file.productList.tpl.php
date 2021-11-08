<?php
/* Smarty version 3.1.39, created on 2021-10-29 00:00:39
  from 'C:\xampp\htdocs\TPE\templates\productList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617b1d87872530_33676039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3524f470ccadb4a23305cc3bd85ecc0767df8314' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\productList.tpl',
      1 => 1635352140,
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
function content_617b1d87872530_33676039 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\TPE\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Id product</th>
                <th>Model</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
</td>
                    <td><a href="viewProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->model;?>
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
                            <?php if ($_smarty_tpl->tpl_vars['product']->value->id_category == $_smarty_tpl->tpl_vars['category']->value->id_category) {?><a
                                href="viewCategory/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->type_category;?>
</a><?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></td>
                    <?php if ((isset($_smarty_tpl->tpl_vars['email']->value))) {?>
                        <td><a class="btn btn-danger" href="deleteProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
">Delete</a></td>
                    <?php }?>

                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
<div class="container-">
  
</div>


    <?php if ((isset($_smarty_tpl->tpl_vars['email']->value))) {?>
        <div class="container-fluid">
        <h4>Añadir nuevo producto:</h4>
            <form action="loadProduct" method="post">
                <div class="form-group">
                    <label for="model">Modelo</label>
                    <input type="text" class="form-control" name="model" id="model" required placeholder="Ingrese el modelo">
                </div>
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <input type="text" class="form-control" name="descriptions" id="descriptions" required placeholder="Ingrese una descrpcion">
                </div>
                <div class="form-group">
                    <label for="price">Precio</label>
                    <input type="number" class="form-control" name="price" id="price" required placeholder="Ingrese el valor">
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
    
                <button type="submit" class="btn btn-success">Cargar</button>
            </form>
        </div>
    <?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
