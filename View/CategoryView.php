<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class CategoryView {
    private $smarty;

    function __construct($userName, $admin){
        $this->smarty = new Smarty();
        $this->smarty->assign('userName',$userName);
        $this->smarty->assign('admin',$admin);
    }

    function showCategories($categories){
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/List.tpl');
    }
    
    function showAllCategories($categories){
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/categoryList.tpl');
    }

    function showCategory($Category){
        $this->smarty->assign('Category', $Category);
        $this->smarty->display('templates/categoryProducts.tpl');
    }
    function showForm($categories){
        $this->smarty->assign('categories', $categories);
    }
    function sendCategory($Category){
        $this->smarty->assign('Category', $Category);
        $this->smarty->display('templates/updateCategory.tpl');
    
    }
    function showHomeLocation(){
        header ("Location: " .BASE_URL. "home");
    }
    function showCategoriesLocation(){
        header ("Location: " .BASE_URL. "allCategories");
    }
}