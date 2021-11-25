<?php
require_once "./Model/ProductModel.php";
require_once "./Model/UserModel.php";
require_once "./View/ProductView.php";
require_once "./Helpers/AuthHelper.php";
require_once "./Model/CategoryModel.php";
require_once "./View/CategoryView.php";

class ProductController
{

    private $model;
    private $view;
    private $authHelper;
    private $userModel;
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
        $this->userModel = new UserModel();
        $this->viewCategory = new CategoryView($userName, $admin);
    }


    function showPage($pageNumber)
    {
        $cantItems = 10;
        $start = ($pageNumber - 1) * $cantItems;
        $cantPages = $this->model->getCantPages($cantItems);
        if ($cantPages) {
            $categories = $this->modelCategory->getCategories();
            $products = $this->model->getProductsPerPage($start, $cantItems);
            $this->view->showProducts($products,$categories, $cantPages);
        } else {
            $this->view->showError("No hay productos");
        }
    }

    function loadProduct()
    {
        $model = $_POST['model'];
        $description = $_POST['descriptions'];
        $price = $_POST['price'];
        $category = $_POST['id_category'];
        var_dump($_FILES);
        if (!empty($model) && !empty($description) && !empty($price) && !empty($category)) {
            if (
                $_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg"
                || $_FILES['input_name']['type'] == "image/png"
            ) {
                $this->model->insertProduct($model, $description, $price, $_FILES['input_name'], $category);
                $this->view->showHomeLocation();
            } else {
                $this->view->showError("Error File type not supported");
            }
        } else {
            $this->view->showError("Error faltan datos");
        }
    }


    function viewProduct($id)
    {
        if (!empty($id)) {
            $product = $this->model->getProduct($id);
            $categories = $this->modelCategory->getCategories();
            $user = $this->userModel->getUser($this->authHelper->getUserName());
            if($user){
                $id = $user->id_user;
                if ($categories) {
                    if ($product) {
                        $this->view->showProduct($product, $categories, $id);
                    } else {
                        $this->view->showError("No existe el producto");
                    }
                } else {
                    $this->view->showError("No se encontraron categorias");
                }
            }else {
                $this->view->showError("No existe el usuario");
            }
            
        } else {
            $this->view->showError("Error faltan datos");
        }
    }

    function deleteProduct($id)
    {
        $admin = $this->authHelper->isAdmin();
        if ($admin == true) {
            $this->model->deleteProductFromDB($id);
            $this->view->showHomeLocation();
        } else {
            $this->view->showError("No tienes permisos", 403);
        }
    }
    function updateProduct($id)
    {
        if (!empty($_POST['model']) && !empty($_POST['descriptions']) && !empty($_POST['price']) && !empty($_POST['id_category'])) {
            $model = $_POST['model'];
            $description = $_POST['descriptions'];
            $price = $_POST['price'];
            $category = $_POST['id_category'];
            $admin = $this->authHelper->isAdmin();
            if ($admin == true) {
                $this->model->updateProductFromDB($model, $description, $price, $category, $id);
                $this->view->showHomeLocation();
            } else {
                $this->view->showError("No tienes permisos", 403);
            }
        } else {
        }
    }


    function search()
    {

        if ($_POST['search'] == "") {
            $this->showPage(1);
        } else {
            $search = $_POST['search'];
            $cantItems = 10;
            $cantPages = $this->model->getCantPages($cantItems);
            $products = $this->model->getProductsSearch($search);
            $categories = $this->modelCategory->getCategories();
            $this->view->showProducts($products, $categories, $cantPages);
        }
    }
    function filter()
    {
        if (!empty($_POST['category']) || !empty($_POST['gaming']) || !empty($_POST['price'])) {

            $category = $_POST['category'];
            $tipo = $_POST['gaming'];
            $priceMax = $_POST['price'];
            $cantItems = 10;
            $cantPages = $this->model->getCantPages($cantItems);
            $products = $this->model->getProductsFilter($category, $tipo, $priceMax);
            $categories = $this->modelCategory->getCategories();
            $this->view->showProducts($products, $categories, $cantPages);
        } else {
            $this->showPage(1);
        }
    }
}
