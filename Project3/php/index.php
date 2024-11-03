<?php

    if($login != true)
    {
        echo "false";
        //header("./views/login.view.php");
    }



    require "./views/index.view.php";
    require "login.php";