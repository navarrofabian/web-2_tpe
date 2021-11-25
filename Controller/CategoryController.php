<?php
require_once "./Model/CategoryModel.php";
require_once "./View/CategoryView.php";
require_once "./Helpers/AuthHelper.php";
require_once "./Model/ProductModel.php";


class CategoryController{

    private $model;
    private $view;
    private $authHelper;
    private $modelProduct;

    function __construct() {
        $this->model = new CategoryModel();
        $this->authHelper = new AuthHelper();
        $userName = $this->authHelper->getUserName();
        $admin = $this->authHelper->isAdmin();
        $this->view = new CategoryView($userName, $admin);
        $this->modelProduct = new ProductModel();

       
    }
    function viewCategory($id_category)
    {
        $Category = $this->model->getCategory($id_category);
        $this->view->showCategory($Category);
    }

    function loadCategory()
    {
        if (!empty($_POST['id_category']) || !empty($_POST['type_category']) || !empty($_POST['brand'])) {
            $id_category = $_POST['id_category'];
            $type_category = $_POST['type_category'];
            $brand = $_POST['brand'];
            $admin = $this->authHelper->isAdmin();
            if ($admin == true) {
                $this->model->insertCategory($id_category, $type_category, $brand);
                $this->view->showHomeLocation();
            } else {
                $this->view->showError("No tiene permisos para realizar esta acción");
            }
        } else {
            $this->view->showError("Error, campos incompletos");
        }
    }

    function sendAllCategories()
    {
        $categories = $this->model->getCategories();
        if($categories){
            $this->view->showCategories($categories);
        }else{
            $this->view->showError("No hay categorias");
        }
    }

    function deleteCategory($id)
    {
        $admin = $this->authHelper->isAdmin();
        if ($admin == true) {
            $this->model->deleteCategoryFromDB($id);
            $this->view->showHomeLocation();
        } else {
            $this->view->showError("No tiene permisos para realizar esta acción");
        }
    }

    function updateCategory($id)
    {   if(!empty($_POST['id_category']) || !empty($_POST['type_category']) || !empty($_POST['brand'])){
            $id_category = $_POST['id_category'];
            $type_category = $_POST['type_category'];
            $brand = $_POST['brand'];
            $admin = $this->authHelper->isAdmin();
            if ($admin == true) {
                $this->model->updateCategoryFromDB( $id_category, $type_category, $brand, $id,);
                $this->view->showHomeLocation();
            } else {
                $this->view->showError("No tiene permisos para realizar esta acción");
            }
        }else{
            $this->view->showError("Error, campos incompletos");
        }
    }
    function showPageUpdate($id_category){
        $Category = $this->model->getOneCategory($id_category);
        $this->view->sendCategory($Category);
    }

}