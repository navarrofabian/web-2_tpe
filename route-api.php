<?php
require_once 'libs/Router.php';
require_once 'Controller/ApiCommentController.php';

$router = new Router();

$router->addRoute('comments', 'GET', 'ApiCommentController', 'showCommentsApi');
$router->addRoute('comments/:ID', 'GET', 'ApiCommentController', 'getCommentById');
$router->addRoute('comments/:ID', 'DELETE', 'ApiCommentController', 'deleteComment');
$router->addRoute('comments', 'POST', 'ApiCommentController', 'saveComment');

$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);