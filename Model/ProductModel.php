<?php

    class ProductModel{

    private $DB;
    function __construct(){
        $this->DB = new PDO('mysql:host=localhost;'.'dbname=product_btx_db;charset=utf8', 'root', ''); 
    }

    function getProducts(){
        $sentence = $this->DB->prepare("select * from product");
        $sentence->execute();
        $products = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function getProduct($id){
        $sentence = $this->DB->prepare("select * from product WHERE id_product=?");
        $sentence->execute(array($id));
        //uso fetch y no fetchall por quiero traer solo una tupla de la db
        $product = $sentence->fetch(PDO::FETCH_OBJ);
        return $product;
    }
    
    function insertProduct($model, $descriptions, $price, $image = null, $id_category){
        $pathImg = null;
        if ($image){

            $pathImg = $this->uploadImage($image);

            $query = $this->DB->prepare("INSERT INTO product(model, descriptions, price, image, id_category) VALUES (?, ?, ?, ?, ?)");
            $query->execute(array($model, $descriptions, $price, $pathImg, $id_category));

            return $this->db->lastInsertId();
        }
      
    }

    private function uploadImage($image){
        $target = "img/product/" . uniqid() . "." . strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));  
        move_uploaded_file($image['tmp_name'], $target);
        return $target;
    }

    function deleteProductFromDB($id){
        $sentence = $this->DB->prepare("DELETE FROM product WHERE id_product=?");
        $sentence->execute(array($id));
    }
    function updateProductFromDB($model, $descriptions, $price, $id_category, $id){
        $sentence = $this->DB->prepare("UPDATE  product SET model=?, descriptions=?, price=?, id_category=? WHERE id_product= ?");
        $sentence->execute(array($model, $descriptions, $price, $id_category, $id));
    }
  
}