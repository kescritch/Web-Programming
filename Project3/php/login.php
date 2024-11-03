<?php

    $username = $_POST["username"];
    $password = $_POST["password"];
    $enter = $_POST["enter"];
    $login = false;

    if(isset($_POST["enter"]))
    {
        if($username == 'CSC390' AND $password == 'php')
        {
            $login = false;
        }

    }

require "./views/login.view.php";