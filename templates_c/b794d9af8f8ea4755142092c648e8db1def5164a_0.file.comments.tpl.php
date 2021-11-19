<?php
/* Smarty version 3.1.39, created on 2021-11-17 04:42:42
  from 'C:\xampp\htdocs\web-2_tpe\templates\vue\comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61947a32414870_41048152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b794d9af8f8ea4755142092c648e8db1def5164a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web-2_tpe\\templates\\vue\\comments.tpl',
      1 => 1637120559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61947a32414870_41048152 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id= "commentID"class="col-md-4">
    <h2>Comentar</h2>
    <form class="form-alta" action="createCommentss" method="post">
        <input placeholder="comentario..." type="text" name="comment" id="comment_id" required>
        <input placeholder="rating..." type="number" name="rating" id="rating_id"> </input>
        <input placeholder="id_product..." type="number" name="id_product" id="id_product"> </input>
        <input placeholder="id_user..." type="number" name="id_user" id="id_user"> </input>
        <input type="submit" class="btn btn-primary" value="comentar">
    </form>
</div>
    <div id="comments">
        <h1>{{ titulo }}</h1>

        <ul id="comments" class="list-group">
            <li v-for="comment in comments" class="list-group-item">
                {{comment.comment_content}} | {{comment.rating}}
            </li>
        </ul>
    </div>
<?php }
}
