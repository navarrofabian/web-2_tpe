<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class UserView{

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showLogin($error = ""){
        $this->smarty->assign('titulo', 'Log In');   
        $this->smarty->assign('error', $error);      
        $this->smarty->display('templates/login.tpl');
    }

    function showRegister($error = ""){
        $this->smarty->assign('titulo/Register');
        $this->smarty->assign('error', $error);   
        $this->smarty->display('templates/register.tpl');
    }
    function showUsers($users){
        $this->smarty->assign('titulo', 'Users');
        $this->smarty->assign('users', $users);
        $this->smarty->display('templates/users.tpl');
    }
  

    function showHome(){
        header("Location: ".BASE_URL."home");
    }


}