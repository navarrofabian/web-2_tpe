<?php
/* Smarty version 3.1.39, created on 2021-11-17 21:59:05
  from 'C:\xampp\htdocs\web-2_tpe\templates\categoryProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61956d19a61e65_06597301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd655f926087dd038c6701022fadef366c5ec9ed6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web-2_tpe\\templates\\categoryProducts.tpl',
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
function content_61956d19a61e65_06597301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\web-2_tpe\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
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
