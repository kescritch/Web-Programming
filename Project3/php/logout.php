<?php
session_start();
$_SESSION["login"] = false;
header('location: ./views/login.view.php');