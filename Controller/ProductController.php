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

    function __construct()
    {
        $this->model = new ProductModel();
        $this->authHelper = new AuthHelper();
        $userName = $this->authHelper->getUserName();
        $admin = $this->authHelper->isAdmin();
        $this->view = new ProductView($userName, $admin);
        $this->modelCategory = new CategoryModel();
        $this->viewCategory = new CategoryView($userName, $admin);
    }

    function showHome()
    {
        // $this->authHelper->checkLoggedIn();
        $products = $this->model->getProducts();
        $categories = $this->modelCategory->getCategories();
        $this->view->showProducts($products, $categories);
    }

    function loadProduct()
    {
        $model = $_POST['model'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $category = $_POST['id_category'];
        if (!empty($model) && !empty($description) && !empty($price) && !empty($category)) {
            if (
                $_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg"
                || $_FILES['input_name']['type'] == "image/png"
            ) {
                $this->model->insertProduct($model, $description, $price,$_FILES['input_name']['tmp_name'], $category);
                $this->view->showHomeLocation();
            } else {
                $this->view->showHomeLocation("Error: File type not supported");
            }
        } else {
            $this->view->showHomeLocation("Error faltan datos");
        }
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
