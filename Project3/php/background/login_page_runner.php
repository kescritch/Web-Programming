<!-- background file for the login page -->
<?php
include_once('login.php');

if(isset($_POST["enter"])) 
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($obj-> authenticate($username,$password))
    {
        $obj->logUserIn($username);
        header("Location: ../views/index.view.php");
    }
}