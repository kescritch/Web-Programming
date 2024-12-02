<?php 

/*
    Background for the create account page

    Todo: 

    hash the entered password
    put email and password into the data base

    redirect to login page
*/


if(isset($_POST['save']))
{
    header('Location: ..\html\mainPage.html');
}