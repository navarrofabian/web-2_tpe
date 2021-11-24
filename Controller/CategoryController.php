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
            $this->model->insertCategory($id_category, $type_category, $brand);
            $this->view->showHomeLocation();
        } else {
            $this->view->showError("Error, campos incompletos");
        }
    }

    function sendAllCategories()
    {
        $categories = $this->model->getCategories();
        $this->view->showAllCategories($categories);
    }

    function deleteCategory($id)
    {
        $this->authHelper->checkLoggedIn();

        $this->model->deleteCategoryFromDB($id);
        $this->view->showCategoriesLocation();
    }

    function updateCategory($id)
    {
        $this->model->updateCategoryFromDB($_POST['id_category'], $_POST['type_category'], $_POST['brand'], $id);
        $this->view->showCategoriesLocation();
    }
    function showPageUpdate($id_category){
        $Category = $this->model->getOneCategory($id_category);
        $this->view->sendCategory($Category);
    }

}