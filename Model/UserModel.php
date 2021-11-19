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


}