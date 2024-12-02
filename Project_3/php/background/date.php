<!-- Background file that prints the date and time. -->

<?php 
    include("login.php");

    $date = date("m/d/Y");
    $time = date("h:ia");

    echo("The date is $date \n");
    echo("The time is $time");