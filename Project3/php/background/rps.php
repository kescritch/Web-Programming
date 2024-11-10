<?php
    include("login.php");
    include("../views/rps.view.php");
    if(isset($_POST['submit']))
    {
        $answer = $_POST['rps'];
        echo $answer;

    }


