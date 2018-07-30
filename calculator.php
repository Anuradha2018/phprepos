<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action ="calculator.php" method ="get">
      First Number is :<input type ="number" name = "num1">
      
      Second number is : <input type ="number" name = "num2">
      <input type ="submit">

    </form>
    Answer is
    <?php
      echo $_GET["num1"] +$_GET["num2"]
    ?>
    </body>
    </html>
