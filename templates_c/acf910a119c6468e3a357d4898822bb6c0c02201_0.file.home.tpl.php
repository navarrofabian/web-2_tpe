<?php
/* Smarty version 3.1.39, created on 2021-10-06 21:17:02
  from 'C:\xampp\htdocs\TPE\templates\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615df62ed1a070_89675563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acf910a119c6468e3a357d4898822bb6c0c02201' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\templates\\home.tpl',
      1 => 1633547748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/productList.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_615df62ed1a070_89675563 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="container">

            <h2>Cargar producto</h2>
            <form class="form-alta" action="loadProduct" method="post">
                                <input placeholder= "model" type="text" name="model" id="model"> </textarea>
                <textarea placeholder="description" type="text" name="description" id="description"> </textarea>

                <select name="id_category" id="id_category" placeholder= "model" required>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                        <option value=<?php echo $_smarty_tpl->tpl_vars['cat']->value->id_category;?>
><?php echo $_smarty_tpl->tpl_vars['cat']->value->type;?>
</option>                
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <input type="submit" class="btn btn-primary" value="Save">
            </form>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:templates/productList.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<a href="allCategories/">Todas las categorias</a>











<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
