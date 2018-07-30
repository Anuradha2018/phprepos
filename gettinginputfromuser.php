<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action ="gettinginputfromuser.php" method ="get">
    Name : <input type ="text" name ="name">
    Age : <input type="number" name ="age">
    <input type ="submit">
    </form>
    <br>
    Your name is
    <?php
       echo $_GET["name"]
    ?>
    and your age is
    <?php
       echo $_GET["age"]
    ?>



    </body>
    </html>
