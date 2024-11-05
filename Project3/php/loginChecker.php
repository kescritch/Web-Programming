<?php
    if(isset($_SESSION["login"]) == false)
    {
        header("Location: ./login.view.php");
    }



    