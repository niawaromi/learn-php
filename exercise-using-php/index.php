<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercise Using PHP</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
      <?php 
      $dayofweek = date("w");

      switch ($dayofweek) {
        case 1:
          echo "<p>It is Monday!</p>";
          break;
        case 2:
          echo "<p>It is Tuesday</p>!";
          break;
        case 3:
          echo "<p>It is Wednesday!</p>";
          break;
        case 4:
          echo "<p>It is Thursday!</p>";
          break;
        case 5:
          echo "It is Friday!";
          break;
        case 6:
          echo "It is Saturday!";
          break;
        case 7:
          echo "It is Sunday!";
          break;
      }
      ?>  

    </body>
</html>