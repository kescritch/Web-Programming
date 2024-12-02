<!-- Background file that contains the login class -->
<?php
    session_start();

    class UserAuthenticator 
    {
        var $username;
        var $password; 

        var $correctUser = "CSC390";
        var $correctPass = "php";

        function isLoggedIn() : Bool
        {
            if($_SESSION["login"] == false || !isset($_SESSION["login"]))
            {
                return false;
            }
            
            return true;
        }

        function authenticate($username, $password) : Bool
        {
            $this -> username = $username;
            $this -> password = $password;

            if($this->password == $this->correctPass && $this->username == $this->correctUser)
            {
                return true; 
            }
            return false; 
        }

        function logUserIn($username)
        {
            $_SESSION["login"] = true;
        }
        function logout()
        {
            return $_SESSION["login"] = false;
        }
        function redirectToLogin()
        {
            header("Location: ../views/login.view.php");
        }
    }

    $obj = new UserAuthenticator;


    


    

