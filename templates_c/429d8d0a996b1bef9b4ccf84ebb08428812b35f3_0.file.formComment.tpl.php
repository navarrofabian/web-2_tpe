<?php
/* Smarty version 3.1.39, created on 2021-11-18 13:17:20
  from 'C:\xampp\htdocs\TPE\templates\formComment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61964450000616_52318368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '429d8d0a996b1bef9b4ccf84ebb08428812b35f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\formComment.tpl',
      1 => 1637237825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61964450000616_52318368 (Smarty_Internal_Template $_smarty_tpl) {
?> <div class="container">
    
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
 
 <?php echo '<script'; ?>
 src="js/Comments.js"><?php echo '</script'; ?>
>
<?php }
}
