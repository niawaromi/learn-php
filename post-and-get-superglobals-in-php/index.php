<html>
    <body>
        
    <?php 

   /*
    $GLOBALS
    $POST
    $_GET
    $_COOKIE
    $_SESSION
    */
    
    echo $_POST['name'];
    ?>

    <form method="POST">
        <input type="hidden" name="name" value="Junior">
        <button type="submit">PRESS ME!</button>
    </form>

    </body>
</html>