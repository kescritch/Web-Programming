<?php
    session_start();
    $_SESSION["login"] = false;

    header("Location: ../views/login.view.php");