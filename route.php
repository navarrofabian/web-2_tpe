<?php 

require_once "Controller/ProductController.php";
require_once "Controller/CategoryController.php";
require_once "Controller/UserController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];

}else {
    $action = 'page/1';
}

$params = explode('/', $action);

$productController = new ProductController();
$categoryController = new CategoryController();
$userController = new UserController();

switch ($params[0]) {
    case 'page': 
        $productController->showPage($params[1]); 
        break;
    case 'register':
        $userController->register();
        break;
    case 'registerUser':
        $userController->registerUser();
        break;
    case 'login': 
        $userController->login(); 
        break;    
    case 'logout': 
        $userController->logout(); 
        break;
    case 'verifyt': 
        $userController->verifyLogin(); 
        break;
    case 'users': 
        $userController->getUsers(); 
        break;
    case 'editAccess': 
        $userController->editAccess($params[1]); 
        break;
    case 'deleteUser':
        $userController->deleteUser($params[1]); 
        break;
    case 'loadProduct': 
        $productController->loadProduct(); 
        break; 
    case 'deleteProduct': 
        $productController->deleteProduct($params[1]); 
        break;
    case 'updateProduct': 
        $productController->updateProduct($params[1]); 
        break;
    case 'product': 
        $productController->viewProduct($params[1]); 
        break;
    case 'showPageUpdate': 
        $categoryController->showPageUpdate($params[1]);  
        break; 
    case 'allCategories': 
        $categoryController->sendAllCategories(); 
        break;  
    case 'deletecategory': 
        $categoryController->deleteCategory($params[1]); 
        break;  
    case 'loadCategory': 
        $categoryController->loadCategory();  
        break;   
    case 'viewCategory': 
        $categoryController->viewCategory($params[1]);  
        break;     
    case 'updateCategory': 
        $categoryController->updateCategory($params[1]);  
        break;

    default: 
        echo('404 Page not found'); 
        break;
}


?>