<?php
require_once 'libs/Router.php';
require_once 'Controller/ApiCommentController.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('comments', 'GET', 'ApiCommentController', 'showCommentsApi');
$router->addRoute('comments/:ID', 'GET', 'ApiCommentController', 'getCommentById');
$router->addRoute('comments/:ID', 'DELETE', 'ApiCommentController', 'deleteComment');
$router->addRoute('comments', 'POST', 'ApiCommentController', 'saveComment');
//$router->addRoute('products/:ID', 'PUT', 'ApiTaskController', 'actualizarTarea');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);