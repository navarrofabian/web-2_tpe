<?php
 session_start();
class AuthHelper
{

    function __construct()
    {
    }

    function checkLoggedIn()
    {

        if (!isset($_SESSION["userName"])) {
            header("Location: " . BASE_URL . "login");
        }
    }
    function getUserName()
    { 
        if (isset($_SESSION["userName"])) {
            return $_SESSION["userName"];
        }
    }
}
