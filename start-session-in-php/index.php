<?php 
   session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>start a session</title>
        <link rel="styleshsst" type="text/css" href="style.css">
    </head>
    <body>
        <ul>
            <li><a href="index.php">HOME></a></li>
            <li><a href="contact.php">CONTACT></a></li>
        </ul>

        <?php 
        $_SESSION['username'] = "jun1002";
        echo $_SESSION['username'];
        ?>
    </body>
</html>