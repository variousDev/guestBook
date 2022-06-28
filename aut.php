<?php

session_start();

require "config.php";

if(!isset($_SESSION['id']))
{
    if(isset($_POST['sub']))
    {
        $login = $_POST['login'];
        $password = $_POST['pass'];


        print $login.' '.$password;
        $query = mysqli_query($db, "SELECT * FROM `users`" );
        // var_dump($query);
        if($query)
        {
            if(mysqli_num_rows($query)>0)
            {
                $ctg = mysqli_fetch_assoc($query);
                $id = $ctg['id'];
                $log=$cth['login'];
                $password=$ctg['password'];
                $name=$ctg['name'];
                print $id." ".$name;
                $_SESSION['id']=$id;
                // header("Location: index.php");
            }
        }
        else
        {
            print "Problems in line 1";
        }
    }
}
else
{
    header("Location: index.php");
    // exit();
}