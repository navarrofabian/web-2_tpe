<?php
/* Smarty version 3.1.39, created on 2021-11-18 13:25:14
  from 'C:\xampp\htdocs\TPE\templates\vue\comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6196462a86d070_31938864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f69ff9b1b02d98bc6508b72543b71809831bfc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\vue\\comments.tpl',
      1 => 1637238282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6196462a86d070_31938864 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="app">
        <h1>{{ titulo }}</h1>
    
        <ul id="lista-tareas" class="list-group">
            <li v-for="comment in comments" class="list-group-item">
                {{comment.comment_content}} | {{comment.rating}}
    
            </li>
        </ul>
    </div>
<?php }
}
