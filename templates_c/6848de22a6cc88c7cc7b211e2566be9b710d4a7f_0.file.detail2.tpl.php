<?php
/* Smarty version 3.1.39, created on 2021-11-18 13:23:20
  from 'C:\xampp\htdocs\TPE\templates\detail2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619645b8b375d7_89564815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6848de22a6cc88c7cc7b211e2566be9b710d4a7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\detail2.tpl',
      1 => 1637238175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/vue/comments.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619645b8b375d7_89564815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    
<div class="row mt-4">
    <div class="col-md-4">
        <h2>Comentar</h2>
        <form class="form-alta" action="" method="post">
            <input placeholder="comment_id" type="text" name="comment_id" id="comment_id" >
            <input placeholder="rating_id" type="number" name="rating_id" id="rating_id" >
            <input placeholder="id_product" type="number" name="id_product" id="id_product" >
            <input placeholder="id_user" type="number" name="id_user" id="id_user" >
            <input type="submit" class="btn btn-primary" value="Guardar">
        </form>
    </div>
    
    <div class="col-md-8">
       
    </div>
</div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/vue/comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="js/Comments.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
