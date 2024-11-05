<?php
    $login = false;
    session_start();

    $_SESSION["login"] = $login;

    if($_SESSION["login"] != true)
    {
        echo "false";
        //header('Location: login.view.php');
    }
    else
    {
        echo "true";
    }

    if(isset($_POST["enter"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username == 'CSC390' AND $password == 'php')
        {
            echo "true";
            $_SESSION["login"] = true;
            header('Location: index.view.php');

        }

    }
    
