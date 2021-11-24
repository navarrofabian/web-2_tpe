<?php

    class ProductModel{

    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=product_btx_db;charset=utf8', 'root', ''); 
    }

    function getProducts(){
        $sentence = $this->db->prepare("select * from product");
        $sentence->execute();
        $products = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function getProduct($id){
        $sentence = $this->db->prepare("select * from product WHERE id_product=?");
        $sentence->execute(array($id));
        //uso fetch y no fetchall por quiero traer solo una tupla de la db
        $product = $sentence->fetch(PDO::FETCH_OBJ);
        return $product;
    }
    
    function insertProduct($model, $descriptions, $price, $image = null, $id_category){
        $pathImg = null;
        if ($image)

            $pathImg = $this->uploadImage($image);

            $query = $this->db->prepare("INSERT INTO product(model, descriptions, price, image, id_category) VALUES (?, ?, ?, ?, ?)");
            $query->execute(array($model, $descriptions, $price, $pathImg, $id_category));

            return $this->db->lastInsertId();
      
    }

    private function uploadImage($image){
        $target = "images/products/" . uniqid() . "." . strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));  
        move_uploaded_file($image['tmp_name'], $target);
        return $target;
    }

    function deleteProductFromDB($id){
        $sentence = $this->db->prepare("DELETE FROM product WHERE id_product=?");
        $sentence->execute(array($id));
    }
    function updateProductFromDB($model, $descriptions, $price, $id_category, $id){
        $sentence = $this->db->prepare("UPDATE  product SET model=?, descriptions=?, price=?, id_category=? WHERE id_product= ?");
        $sentence->execute(array($model, $descriptions, $price, $id_category, $id));
    }

    function getCantPages($cantItems){
        $sentence = $this->db->prepare("SELECT COUNT(*) FROM product");
        $sentence->execute();
        $cant = $sentence->fetchColumn();
        return ceil($cant / $cantItems);
    }
    function getProductsPerPage($start, $cantItems){
        $sentence = $this->db->prepare("SELECT * FROM product LIMIT :start, :cantItems");
        $sentence->bindParam(':start', $start, PDO::PARAM_INT);
        $sentence->bindParam(':cantItems', $cantItems, PDO::PARAM_INT);
        $sentence->execute();
        $products = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }


    function getProductsSearch($search){
        $sentence = $this->db->prepare("SELECT * FROM product WHERE model LIKE ?");
        $sentence->execute(array("%$search%"));
        $products = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function getProductsFilter($category, $tipo, $priceMax){
        $sentence = $this->db->prepare("SELECT * FROM product WHERE id_category=? AND price<=? AND gaming=?");
        $sentence->execute(array($category, $priceMax, $tipo));
        $products = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $products;
    
    }

  
}