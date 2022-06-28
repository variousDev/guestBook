<?php
session_start();
require "config.php";

// var_dump($_SESSION['id']);

if(isset($_SESSION['id'])){

if(isset($_POST['sub']) & !empty($_POST['text']))
{
    $mess = $_POST['text'];
    $messages = $mess;
    // echo mb_detect_order("UTF-8");
    // echo mysqli_character_set_name($db);
    // exit();
    $userid = $_SESSION['id'];
    $insert = "INSERT INTO `messages`(`userid`, `message`) VALUES ($userid, $messages)";
    // var_dump($insert);
    $query1 = mysqli_query($db, $insert);
    // var_dump($query1);

    if($query1) {
        header("location:index.php");
    }
    else
    {
        print "some problems with that";
        ?>
        <a href="index.php"> MAin page</a>
        <?php
    }

} else {
    header("location:index.php");
}

} else 
{
    header("location:index.php");
}
