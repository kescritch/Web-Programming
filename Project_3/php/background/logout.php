<!-- Logs the user out and sets the session as false -->
<?php
    session_start();
    $_SESSION["login"] = false;

    header("Location: ../views/login.view.php");