<?php
session_start();
class AuthHelper
{

    function __construct()
    {
    }

    function checkLoggedIn()
    {
        if (!isset($_SESSION["email"])) {
            header("Location: " . BASE_URL . "login");
        }
    }
    function getEmail()
    {
        if (isset($_SESSION["email"])) {
            return $_SESSION["email"];
        }
    }
}
