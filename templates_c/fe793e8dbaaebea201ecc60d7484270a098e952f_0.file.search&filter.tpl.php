<?php
/* Smarty version 3.1.39, created on 2021-11-24 04:32:11
  from 'C:\xampp\htdocs\TPE\templates\search&filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619db23b4edcc4_22482734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe793e8dbaaebea201ecc60d7484270a098e952f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\search&filter.tpl',
      1 => 1637724449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619db23b4edcc4_22482734 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="row gy-2 gx-3 align-items-center" action="filter" method="POST">

    <div class="col-auto">
        <label for="customRange2" class="form-label">Precio</label>
        <p>$0 _______________ $1000</p>
        <input type="range" list="tickmarks" class="form-range" min="0" max="1000" name="price" id="price">
    </div>
    <div class="col-auto">
        <label class="visually-hidden" for="autoSizingSelect">Preference</label>
        <select class="form-select" name="category" id="category" >
            <option selected>Categoria: </option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
><?php echo $_smarty_tpl->tpl_vars['category']->value->type_category;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
    <div class="col-auto">
        <label class="visually-hidden" for="autoSizingSelect">Preference</label>
        <select class="form-select" name="gaming" id="gaming">
            <option selected>Tipo de producto: </option>
                <option value="1">Gaming</option>
                <option value="0">Office</option>
        </select>
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
<?php }
}
