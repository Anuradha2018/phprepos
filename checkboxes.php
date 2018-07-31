<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action ="checkboxes.php" method ="post">
      Apples: <input type ="checkbox" name ="fruits[]" value="apples"><br>
      Oranges: <input type ="checkbox" name ="fruits[]" value="Oranges"><br>
      Banana: <input type ="checkbox" name ="fruits[]" value="Banana"><br>
      Grapes: <input type ="checkbox" name ="fruits[]" value="Grapes"><br>
      Mangoes: <input type ="checkbox" name ="fruits[]" value="Mangoes"><br>
      Pineapple: <input type ="checkbox" name ="fruits[]" value="Pineapple"><br>
      Watermelon: <input type ="checkbox" name ="fruits[]" value="Watermelon"><br>
      Avocado: <input type ="checkbox" name ="fruits[]" value="Avocado"><br>
      <input type ="submit">
    </form>

    <?php
      $fruits = $_POST["fruits"];
      echo $fruits[0];
      ?>
    </body>
    </html>
