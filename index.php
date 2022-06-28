<?php

session_start();

sprintf($_SESSION['id']);

if(isset($_SESSION['id']))
{
    header('Location: guest.php');
    // exit();
}
else 
{
    header('Location: auth.php');
    // exit();
}

