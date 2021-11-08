<?php
/* Smarty version 3.1.39, created on 2021-10-13 19:11:56
  from 'C:\xampp\htdocs\TPE\templates\homePublic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6167135c1c6e99_47362703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e7c5d3548e4ebe6cde11a53cfcfa80abd26b76a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\homePublic.tpl',
      1 => 1634145113,
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
function content_6167135c1c6e99_47362703 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\TPE\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table>
        <thead>
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


                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>





















<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
