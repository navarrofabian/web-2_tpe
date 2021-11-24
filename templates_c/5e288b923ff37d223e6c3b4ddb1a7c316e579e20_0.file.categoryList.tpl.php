<?php
/* Smarty version 3.1.39, created on 2021-11-24 15:24:49
  from 'C:\xampp\htdocs\TPE\templates\categoryList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619e4b31cf8308_10875863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e288b923ff37d223e6c3b4ddb1a7c316e579e20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\categoryList.tpl',
      1 => 1637763887,
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
function content_619e4b31cf8308_10875863 (Smarty_Internal_Template $_smarty_tpl) {
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
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
</td>
        <td><a href="./viewCategory/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->type_category;?>
</td>
        <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['category']->value->brand,30);?>
</td>
        <?php if (($_smarty_tpl->tpl_vars['admin']->value)) {?>
        <td> <a class="btn btn-warning"loc href="./showPageUpdate/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
">Edit </a></td>
        <td> <a class="btn btn-danger" href="./deletecategory/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
">Delete</a></td> 
       <?php }?>            
      </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>
</div>

<?php if (($_smarty_tpl->tpl_vars['admin']->value)) {?>
  <div class="container-fluid">
  <h4>Añadir nueva categoria:</h4>
      <form class="form-alta" action="./loadCategory" method="post">
          <div class="form-group">
              <label for="model">Modelo</label>
              <input type="number" class="form-control" name="id_category" id="id_category" required placeholder="ID">
          </div>
          <div class="form-group">
              <label for="description">Descripcion</label>
              <input type="text" class="form-control" name="type_category" id="type_category" required placeholder="Tipo de categoria">
          </div>
          <div class="form-group">
              <label for="price">Precio</label>
              <input type="text" class="form-control" name="brand" id="brand" required placeholder="Marca">
          </div>
          <button type="submit" class="btn btn-success">Añadir</button>
      </form>
  </div>
<?php }
$_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
