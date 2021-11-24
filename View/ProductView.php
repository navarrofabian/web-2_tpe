<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class ProductView {
    private $smarty;

    function __construct($userName, $admin){
        $this->smarty = new Smarty();
        $this->smarty->assign('userName',$userName);
        $this->smarty->assign('admin',$admin);
    
    }

    function showProducts($products,$categories, $cantPages){
        $this->smarty->assign('products', $products);
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('cantPages', $cantPages);
        $this->smarty->display('templates/productList.tpl');    
    }
    
    function showProduct($product, $categories){
        $this->smarty->assign('product', $product);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/detail.tpl');
    }
   
    function showForm($categories){
        $this->smarty->assign('categories', $categories);
    }
    function showError($error = ""){  
        $this->smarty->assign('titulo', 'Log In');  
        $this->smarty->assign('error', $error);      
        $this->smarty->display('templates/productList.tpl');
    }
   

    function showHomeLocation(){
        header ("Location: " .BASE_URL. "page/1");
    }  
}