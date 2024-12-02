
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

    if(isset($_POST['createAccount']))
    {
        header('Location: ..\html\createAccount.html');
    }


