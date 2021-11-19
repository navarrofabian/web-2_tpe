<?php
require_once "./Model/UserModel.php";
require_once "./View/UserView.php";

class UserController {

    private $model;
    private $view;

    function __construct(){
        $userName = $this->authHelper->getUserName();
        $admin = $this->authHelper->isAdmin();
        $this->model = new UserModel();
        $this->view = new UserView($userName, $admin);
    }
    function registerUser(){
        if(!empty($_POST['userName']) && !empty($_POST['email']) && !empty($_POST['password'])){
            $userName = $_POST['userName'];
            $userEmail = $_POST['email'];
            var_dump($userName);
            if($this->model->checkUserName($userName)){
                $this->view->showLogin("El nombre de usuario ya existe");
                var_dump("El nombre de usuario ya existe");
            }else{
                $userPassword =password_hash($_POST['password'],PASSWORD_BCRYPT);
                $this->model->registerUserDB($userName, $userEmail, $userPassword);
                $this->view->showLogin();

            }
           
        }
    }
    function getUsers(){
        $users = $this->model->getUsersFromDb();
        $this->view->showUsers($users);
    }

    function logout(){
        session_destroy();
        $this->view->showLogin("Te deslogueaste!");
    }

    function register(){
        $this->view->showRegister();
    }

    function login(){
        $this->view->showLogin();
    }

    function verifyLogin(){
        if(!empty($_POST['userName']) && !empty($_POST['password'])){
            $userName = $_POST['userName'];
            var_dump($userName);
            $password = $_POST['password'];
           
     
            // Obtengo el usuario de la base de datos
            $user = $this->model->getUser($userName);
         
     
            // Si el usuario existe y las contraseñas coinciden
            if ($user && password_verify($password, $user->password)) {

                session_start();
                $_SESSION["userName"] = $userName;
                //verificar si el usuario es admin o usuario 
                if($this->model->isAdmin($userName)){
                    $_SESSION["admin"] = true;
                    //$this->view->showHomeAdmin();
                }else{
                    $_SESSION["admin"] = false;
                }

                
                $this->view->showHome();
            } else {
                $this->view->showLogin("Acceso denegado");
            }
        }
    }

}