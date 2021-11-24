<?php
require_once "./Model/UserModel.php";
require_once "./View/UserView.php";
require_once "./Helpers/AuthHelper.php";

class UserController {

    private $authHelper;
    private $model;
    private $view;

    function __construct(){
        $this->authHelper = new AuthHelper();
        $userName = $this->authHelper->getUserName();
        $admin = $this->authHelper->isAdmin();
        $this->model = new UserModel();
        $this->view = new UserView($userName, $admin);
    }
    function registerUser(){
        if(!empty($_POST['userName']) && !empty($_POST['email']) && !empty($_POST['password'])){
            $userName = $_POST['userName'];
            $userEmail = $_POST['email'];
            if($this->model->checkUserName($userName)){
                $this->view->showLogin("El nombre de usuario ya existe");
            }else{
                $userPassword =password_hash($_POST['password'],PASSWORD_BCRYPT);
                $this->model->registerUserDB($userName, $userEmail, $userPassword);
                $this->verifyLogin();
                $this->view->showHome();

            }
           
        }
    }
    function getUsers(){
        $users = $this->model->getUsersFromDb();
        $this->view->showUsers($users);
    }
    function editAccess($id){
        $user = $this->model->getAdminByID($id);
        if($user){
            
        }
        if($user['admin'] == 1){
            $this->model->removeAccess($id);
            $this->view->showUsers($this->model->getUsersFromDb());

        }
        else{
            $this->model->addAccess($id);
            $this->view->showUsers($this->model->getUsersFromDb());
        }
    }
    function deleteUser($id){
        $this->model->deleteUser($id);
        $this->view->showUsers($this->model->getUsersFromDb());
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
            $user = $this->model->getUser($userName);
            if ($user && password_verify($password, $user->password)) {

                session_start();
                $_SESSION["userName"] = $userName;
                if( $user->admin == 1){
                    $_SESSION["admin"] = true;
                }
                else{
                    $_SESSION["admin"] = false;
                }
                
                $this->view->showHome();
            } else {
                $this->view->showLogin("Acceso denegado");
            }
        }
    }

}