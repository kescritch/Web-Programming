<?php
    include("login.php");
    include("../views/rps.view.php");
    include("playrps.php");

    if(isset($_POST['submit']))
    {
        if(isset($_POST['rps']))
        {
            $answer = $_POST['rps'];
            echo "You entered: $answer. <br>";
            echo "Computer picked: $computer. <br>";

            if($answer == $computer)
                echo "Its a Tie!";
            if($answer == "Rock" && $computer == "Paper")
                echo "Computer Wins!";
            if($answer == "Rock" && $computer == "Scissors")
                echo "You Win!";
            if($answer == "Paper" && $computer == "Rock")
                echo "You Win!";
            if($answer == "Paper" && $computer == "Scissors")
                echo "Computer Wins!";
            if($answer == "Scissors" && $computer == "Rock")
                echo "Computer Wins!";
            if($answer == "Scissors" && $computer == "Paper")
                echo "You Win!";
        }
        else 
            echo "Select One. ";

    }



