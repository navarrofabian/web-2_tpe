<?php

class UserModel{

    private $DB;
    function __construct(){
        $this->DB = new PDO('mysql:host=localhost;'.'dbname=product_btx_db;charset=utf8', 'root', ''); 
    }


    function getUser($userName){
        $query = $this->DB->prepare('SELECT * FROM user WHERE userName = ?');
        $query->execute([$userName]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    function getUsersFromDb(){
        $query = $this->DB->prepare('SELECT * FROM user');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function registerUserDB($userName, $userEmail, $userPassword){
        $query = $this->DB->prepare('INSERT INTO user (userName, email, password) VALUES (?, ?, ?)');
        $query->execute([$userName, $userEmail, $userPassword]);
    }

    function checkUserName($userName){
        $query = $this->DB->prepare('SELECT * FROM user WHERE userName = ?');
        $query->execute([$userName]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    function isAdmin($userName){
        $query = $this->DB->prepare('SELECT * FROM user WHERE userName = ? AND admin = 1');
        $query->execute([$userName]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    
    function getAdminByID($id){
        $query = $this->DB->prepare('SELECT `admin` FROM user WHERE id_user = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    function removeAccess($id){
        $query = $this->DB->prepare('UPDATE user SET admin = 0 WHERE id_user = ?');
        $query->execute([$id]);
    }

    function addAccess($id){
        $query = $this->DB->prepare('UPDATE user SET admin = 1 WHERE id_user = ?');
        $query->execute([$id]);
    }

    function deleteUser($id){
        $query = $this->DB->prepare('DELETE FROM user WHERE id_user = ?');
        $query->execute([$id]);
    }

}