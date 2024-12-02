<!-- calls the logout method -->
<?php
    include('login.php');
    $obj->logout();
    $obj->redirectToLogin();