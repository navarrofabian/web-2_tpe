<?php
/* Smarty version 3.1.39, created on 2021-11-18 13:19:41
  from 'C:\xampp\htdocs\TPE\templates\vue\formComment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619644dd813719_70488508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71d2d16715dfb3a5ffe22db7c0c5e290d9f7bfe0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\vue\\formComment.tpl',
      1 => 1637237980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619644dd813719_70488508 (Smarty_Internal_Template $_smarty_tpl) {
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
 

<?php }
}
