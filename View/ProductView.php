<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class ProductView {
    private $smarty;

    function __construct($userName){
        $this->smarty = new Smarty();
        $this->smarty->assign('userName',$userName);
    
    }

    function showProducts($products, $categories){
        $this->smarty->assign('products', $products);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/productList.tpl');    
    }
   
    function showProduct($product){
        $this->smarty->assign('product', $product);
        $this->smarty->display('templates/detail.tpl');
    }
   
    function showForm($categories){
        $this->smarty->assign('categories', $categories);
    }
   

    function showHomeLocation(){
        header ("Location: " .BASE_URL. "home");
    }  
}