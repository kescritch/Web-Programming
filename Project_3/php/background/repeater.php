<!-- Background file for the repeater file. Picks a random number and prints a sentence out a random amout of times -->
<?php 
    include("login.php");

    $number = rand(0,500);
    $count = 0;

    while($count < $number)
    {
        echo("\n Web Programming is fun! <br>");
        $count++;

    }
