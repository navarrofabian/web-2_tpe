<?php

class UserModel{

    private $DB;
    function __construct(){
        $this->DB = new PDO('mysql:host=localhost;'.'dbname=product_btx_db;charset=utf8', 'root', ''); 
    }


    function getUser($email){
        $query = $this->DB->prepare('SELECT * FROM user WHERE email = ?');
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function registerUserDB($email, $password){
        $sentencia = $this->DB->prepare("INSERT INTO user(email, password) VALUES (?, ?)");
        $sentencia->execute(array($email, $password));
    }


}