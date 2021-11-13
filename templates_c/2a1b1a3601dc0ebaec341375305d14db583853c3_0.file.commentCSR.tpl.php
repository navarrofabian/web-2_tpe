<?php
/* Smarty version 3.1.39, created on 2021-11-09 03:54:50
  from 'C:\xampp\htdocs\web-2_tpe\templates\commentCSR.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6189e2fa627df7_11992901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a1b1a3601dc0ebaec341375305d14db583853c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web-2_tpe\\templates\\commentCSR.tpl',
      1 => 1636425643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/vue/taskList.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6189e2fa627df7_11992901 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <div class="row mt-4">
        <div class="col-md-4">
            <h2>Crear Tarea</h2>
            <form class="form-alta" action="createComment" method="post">
                <input placeholder="content" type="text" name="content" id="content" required>
                <textarea placeholder="rating" type="number" name="rating" id="rating"> </textarea>
                <input type="submit" class="btn btn-primary" value="comentar">
            </form>
        </div>
        
        <div class="col-md-8">
            <?php $_smarty_tpl->_subTemplateRender('file:templates/vue/taskList.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
