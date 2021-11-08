<?php
/* Smarty version 3.1.39, created on 2021-10-07 23:36:27
  from 'C:\xampp\htdocs\TPE\templates\templates\categoryProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f685bebdc87_99991498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a25ceb942ba36409c54f65dcf54595d08f01af7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\templates\\categoryProducts.tpl',
      1 => 1633642586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_615f685bebdc87_99991498 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\TPE\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3>Todos los productos de la categoria</h3>

 <table>
    <thead>
      <tr>
        <th>Id product</th>
        <th>Model</th>
        <th>Description</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CategoryProducts']->value, 'CategoryProduct');
$_smarty_tpl->tpl_vars['CategoryProduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CategoryProduct']->value) {
$_smarty_tpl->tpl_vars['CategoryProduct']->do_else = false;
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['CategoryProduct']->value->id_product;?>
 </td>
        <td><?php echo $_smarty_tpl->tpl_vars['CategoryProduct']->value->model;?>
</td>
        <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['CategoryProduct']->value->descriptions,30);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['CategoryProduct']->value->price;?>
</td>
      </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>

<a href="home"><- back to productList</a>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
