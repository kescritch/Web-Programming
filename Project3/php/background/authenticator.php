<!-- CHecks if the user is logged in, if not sends them to the login page -->
<?php
    include('login.php');
    if(!$obj -> isLoggedin())
    {
        $obj->redirectToLogin();
    }


    

