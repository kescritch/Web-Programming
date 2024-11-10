<?php
    session_start();
    
    if(isset($_SESSION["login"]) == false)
    {
        $_SESSION["login"] = false;
    }

    if($_SESSION["login"] == false)
    {

        if(basename(__FILE__) != "login.view.php")
        {
            echo basename(__FILE__);
            header("Location: $_SERVER['DOCUMENT_ROOT']");

        }

        if(isset($_POST['enter']))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $correctUsername = "CSC390";
            $correctPassword = "php";

            if($username = $correctUsername AND $password = $correctPassword)
            {
                $_SESSION["login"] = true;
                header("Location: ./views/index.view.php");
            }
            else
            {
                echo "Incorrect Username or Password.";
            }
        }
    }


        

    

