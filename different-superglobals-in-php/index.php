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

    $x = 5;

    function something() {
        $y = 10;
        echo $GLOBALS['x'];
    }
    
    something();
    
    ?>

    </body>
</html>