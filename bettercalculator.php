<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action ="bettercalculator.php" method ="post">
      First number: <input type ="number" name ="num1">
      OPERATOR:<input type="textbox" name="op">
      Second number: <input type ="number" name ="num2">
      <input type ="submit">

    </form>

      <?php
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $OP = $_POST["op"];

      if($OP == "+"){
        echo $num1 + $num2;
      }else if($OP == "-"){
        echo $num1 - $num2;
      }elseif($OP == "*"){
        echo $num1 * $num2;
      }elseif($OP == "/"){
        echo $num1 / $num2;
      }else{
        echo "Invalid Operator";
      }

      
      ?>
      </body>
      </html>
