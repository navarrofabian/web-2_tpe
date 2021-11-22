<?php

    class CategoryModel{

    private $DB;
    function __construct(){
        $this->DB = new PDO('mysql:host=localhost;'.'dbname=product_btx_db;charset=utf8', 'root', ''); 
    }
 
    function getCategories(){
        $sentences = $this->DB->prepare("SELECT * FROM `category`");
        $sentences->execute();
        $categories = $sentences->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }
    function getCategory($id_category){
        $sentence = $this->DB->prepare("select * from product WHERE id_category=?");
        $sentence->execute(array($id_category));
        $category = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $category;
    }

    function insertCategory($id_category,$type_category,$brand){
        $sentence = $this->DB->prepare("INSERT INTO category(id_category, type_category, brand) VALUES(?, ?, ?)");
        $sentence->execute(array($id_category, $type_category, $brand));
    }
   
    function deleteCategoryFromDB($id){
        $sentence = $this->DB->prepare("DELETE FROM `category` WHERE `category`.`id_category` =?");
        $sentence->execute(array($id));
    }
   
    function updateCategoryFromDB($id_category,$type_category,$brand, $id){
        $sentence = $this->DB->prepare("UPDATE  category SET id_category=?, type_category=?, brand=? WHERE id_category= ?");
        $sentence->execute(array($id_category, $type_category, $brand, $id));
    }
    function getOneCategory($id_category){
        $sentence = $this->DB->prepare("select * from category WHERE id_category=?");
        $sentence->execute(array($id_category));
        $category = $sentence->fetch(PDO::FETCH_OBJ);
        return $category;
    }
    function getCategoryPerPage($pageNumber){
        $offset = ($pageNumber - 1) * 10;
        $sentence = $this->DB->prepare("SELECT * FROM product LIMIT 10 OFFSET ?");
        $sentence->execute(array($offset));
        $categories = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }


 
}