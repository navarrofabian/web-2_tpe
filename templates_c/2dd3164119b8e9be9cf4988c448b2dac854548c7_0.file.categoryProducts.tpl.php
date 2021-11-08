<?php
/* Smarty version 3.1.39, created on 2021-10-15 01:14:23
  from 'C:\xampp\htdocs\TPE\templates\categoryProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168b9cf6ac968_93613168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dd3164119b8e9be9cf4988c448b2dac854548c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\categoryProducts.tpl',
      1 => 1634253261,
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
function content_6168b9cf6ac968_93613168 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\TPE\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="table-responsive">
<h3>Todos los productos de la categoria</h3>
<table class="table table-bordered">
        <thead class="table-dark">
      <tr>
        <th>Id product</th>
        <th>Model</th>
        <th>Description</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Category']->value, 'Product');
$_smarty_tpl->tpl_vars['Product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Product']->value) {
$_smarty_tpl->tpl_vars['Product']->do_else = false;
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['Product']->value->id_product;?>
 </td>
        <td><?php echo $_smarty_tpl->tpl_vars['Product']->value->model;?>
</td>
        <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['Product']->value->descriptions,30);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['Product']->value->price;?>
</td>
      </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>

  </table>     
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
