<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action ="switch.php" method ="post">
    What was your grade?
    <input type ="text" name ="grade">
    <input type="submit">
</form>


<?php
  $grade = $_POST["grade"];

  switch($grade){
    
    case "A":
    echo "Your grade is A";
    echo "You did amazing!";
    break;

    case "B":
    echo "Your grade is B";
    echo "You did pretty good!";
    break;

    case "C":
    echo "Your grade is C";
    echo "You did satisfactory!";
    break;

    case "D":
    echo "Your grade is D";
    echo "You need improvement";
    break;

    case "F":
    echo "Your grade is F";
    echo "You failed";
    break;

    default:
    echo "Invalid Grade";
  }

  
  ?>
</body>
</html>