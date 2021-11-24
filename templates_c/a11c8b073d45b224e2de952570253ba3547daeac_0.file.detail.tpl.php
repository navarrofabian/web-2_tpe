<?php
/* Smarty version 3.1.39, created on 2021-11-24 22:11:26
  from 'C:\xampp\htdocs\TPE\templates\detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619eaa7e060da4_32033501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a11c8b073d45b224e2de952570253ba3547daeac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\detail.tpl',
      1 => 1637788283,
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
function content_619eaa7e060da4_32033501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\TPE\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (!empty($_smarty_tpl->tpl_vars['product']->value)) {?>
    <?php if (!empty($_smarty_tpl->tpl_vars['categories']->value)) {?>

        <div class="table-responsive" id="product" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
">
            <figure>
                <?php if ((isset($_smarty_tpl->tpl_vars['product']->value->image))) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->image;?>
" />
                <?php }?>
            </figure>

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
                        <td><?php echo $_smarty_tpl->tpl_vars['product']->value->type_category;?>
</td>
                    </tr>
                </tbody>
            </table>
            <?php if (($_smarty_tpl->tpl_vars['admin']->value)) {?>
                <div class="container-fluid">
                    <h4>Editar Producto:</h4>
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
><?php echo $_smarty_tpl->tpl_vars['category']->value->type_category;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Confirm Edit">
                    </form>
                </div>
            </div>
            </div>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['userName']->value))) {?>
            <div class="cont-comm">
                <div class="col-md-6">
                    <h2>Comentar</h2>
                    <form id="formComment">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" type="text" name="comment_id"
                                id="comment_id" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div>
                        <div class="col-md-4">
                            <label for="customRange2" class="form-label">Puntuacion</label>
                        <input name="rating_id" id="rating_id" type="range" class="form-range" min="1" max="5" id="customRange2
                                       </div>

                                     <div hidden>
                                        <input placeholder=" id_user" type="text" name="id_user" id="id_user"
                            value="<?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
">
                    </div>
                    <div hidden>
                        <input placeholder=" id_product" type="number" name="id_product" id="id_product"
                            value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </form>

            </div>

        <?php }?>


                    <?php $_smarty_tpl->_subTemplateRender('file:templates/vue/comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>










                <?php }?>


                <?php }?>
    <?php echo '<script'; ?>
 src="js/Comments.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
