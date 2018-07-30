<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action ="madlibsgame.php" method ="get">
      color:<input type="text" name="color"><br>
      pluralnoun:<input type="text" name="pluralnoun"><br>
      celebrity:<input type="text" name="celebrity"><br>
      <input type ="submit">
    </form>
    <br><br>

      <?php
      $color = $_GET["color"];
      $pluralnoun = $_GET["pluralnoun"];
      $celebrity = $_GET["celebrity"];
        echo "Roses are $color <br>";
        echo "$pluralnoun are blue <br>";
        echo "I love $celebrity <br>";
      ?>
      </body>
    </html>
