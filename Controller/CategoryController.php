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
        $this->view = new CategoryView($this->authHelper->getEmail());
        $this->modelProduct = new ProductModel();

       
    }
    function viewCategory($id_category)
    {
        $Category = $this->model->getCategory($id_category);
        $this->view->showCategory($Category);
    }

    function loadCategory()
    {
        $this->model->insertCategory($_POST['id_category'], $_POST['type_category'], $_POST['brand']);
        $this->view->showCategoriesLocation();
    }

    function sendAllCategories()
    {
        $categories = $this->model->getCategories();
        $products = $this->modelProduct->getProducts(); 
        $this->view->showAllCategories($categories, $products );
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