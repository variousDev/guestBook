<?php

session_start();
// $id = $_SESSION['id'];
require 'config.php';
if(isset($_SESSION['id']))

{
    ?>
    <html>
        <head>
        <meta charset="utf-8_general_ci">
            <title>
                guest book
            </title>
        </head>
        <body>
            <form method="POST" action="add.php">
                <input type="text" name='text' placeholder="Write message"><br>
                <input type="submit" name="sub" value="Send">
            </form>

            <?php
                $query2=mysqli_query($db,"SELECT * FROM `messages`");

                if($query2){
                    if(mysqli_num_rows($query2)>0)
                    {
                        while($ctg = mysqli_fetch_assoc($query2))
                        {
                            $userid = $ctg['userid'];
                            $message = $ctg['message'];
                            $query3 = mysqli_query($db, "SELECT * FROM `users` WHERE `id`=$userid");
                            $userctg = mysqli_fetch_assoc($query3);
                            $name = $userctg['name'];
                            print $name." - ".$message."<br>";
                        }
                    }
                    else
                    {
                        print 'Empty messages!';
                    }
                }
                else
                {
                    print 'some problems';
                }
            ?>
        </body>
    </html>
    <?php
}
else
{
    header('Location: index.php');
}