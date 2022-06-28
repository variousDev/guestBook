<?php
session_start();

if(!isset($_SESSION['id']))
{
    ?>
    <html>
        <head>
            <title>
                Authorization
            </title>
        </head>
        <body>
            <h1>Enter to site!</h1>
            <form method = "POST" action="aut.php">
                <input type="text" name="login" placeholder="Login"><br>
                <input type="password" name="pass" placeholder="Password"><br>
                <input type="submit" name="sub" value="Enter">
            </form>
        </body>
    </html>
    <?php
}
else
{
    header('Location: index.php');
    // exit();
}


