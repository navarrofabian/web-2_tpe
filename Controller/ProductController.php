<?php
require_once "./Model/ProductModel.php";
require_once "./View/ProductView.php";
require_once "./Helpers/AuthHelper.php";
require_once "./Model/CategoryModel.php";
require_once "./View/CategoryView.php";

class ProductController
{

    private $model;
    private $view;
    private $authHelper;
    private $modelCategory;
    private $viewCategory;

    function __construct() {
        $this->model = new ProductModel();
        $this->authHelper = new AuthHelper();
        $this->view = new ProductView($this->authHelper->getEmail());
        $this->modelCategory = new CategoryModel();
        $this->viewCategory = new CategoryView($this->authHelper->getEmail());
   
       
    }

    function showHome()
    {
        //$this->authHelper->checkLoggedIn();
        $products = $this->model->getProducts();
        $categories = $this->modelCategory->getCategories();
        $this->view->showProducts($products,$categories);
    }   

    function loadProduct()
    {
        $this->model->insertProduct($_POST['model'], $_POST['descriptions'], $_POST['price'], $_POST['id_category']);
        $this->view->showHomeLocation();
    }
   

    function viewProduct($id)
    {
        //$this->authHelper->checkLoggedIn();
        $categories = $this->modelCategory->getCategories();
        $this->view->showForm($categories);

        $product = $this->model->getProduct($id);
        $this->view->showProduct($product);
    }

    function deleteProduct($id)
    {
        //$this->authHelper->checkLoggedIn();
        $this->model->deleteProductFromDB($id);
        $this->view->showHomeLocation();
    }
    function updateProduct($id)
    {
        //$this->authHelper->checkLoggedIn();
        $this->model->updateProductFromDB($_POST['model'], $_POST['descriptions'], $_POST['price'], $_POST['id_category'], $id);
        $this->view->showHomeLocation();
    }

}
