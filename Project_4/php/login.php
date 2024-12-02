
<?php
/*
    Background code for the login page 

    Todo:
     
    Make a create account page
        php
    
    make a class to verify email and password
        get from database
        redirect to the main page


    inputs:
        Email 
        Password 
        Enter button
        Create account button - redirects to Create account page. 
*/
require("UserAuthenticator.php");
$user = new UserAuthenticator;
$username = $_POST["username"];
$password = $_POST["password"];
if($user -> authenticate($username, $password)){
    $user-> logUserIn();
    header("Location: ../index.php");
}else{
    header("Location: ../login.php");
}
    


    




