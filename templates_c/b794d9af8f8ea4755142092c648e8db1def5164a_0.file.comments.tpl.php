<?php
/* Smarty version 3.1.39, created on 2021-11-13 04:40:29
  from 'C:\xampp\htdocs\web-2_tpe\templates\vue\comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618f33adbe8794_43277539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b794d9af8f8ea4755142092c648e8db1def5164a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web-2_tpe\\templates\\vue\\comments.tpl',
      1 => 1636774827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618f33adbe8794_43277539 (Smarty_Internal_Template $_smarty_tpl) {
?>


    <div id="comment">
        <h1>{{ titulo }}</h1>

        <ul id="comments" class="list-group">
            <li v-for="comment in comments" class="list-group-item">
                {{comment.comment_content}} | {{comment.rating}}
            </li>
        </ul>
    </div>
<?php }
}
