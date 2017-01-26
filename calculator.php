<!DOCTYPE html>
<html>
  <head>
    <title>Calculator Module</title>
  </head>
  <body>
    <form action="calculator.php" method="get">
      First Operand <input type="text" name="firstInt"><br>
      Second Operand <input type="text" name="secondInt"><br>
      <input type="radio" name="group1" value="Add">Add<br>
      <input type="radio" name="group1" value="Subtract">Subtract<br>
      <input type="radio" name="group1" value="Multiply">Multiply<br>
      <input type="radio" name="group1" value="Divide">Divide<br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>

<?php
if ( isset($_GET['firstInt']) && isset($_GET['secondInt']) && isset($_GET['group1'])) {
  $firstOp = $_GET['firstInt'];
  $secondOp = $_GET['secondInt'];
  $group1 =  $_GET['group1'];
  if (is_numeric($firstOp) && is_numeric($secondOp)) {
    if ($group1 == "Add") {
      echo $firstOp + $secondOp;
    }
    else if ($group1 == "Subtract"){
      echo $firstOp - $secondOp;
    }
    else if ($group1 == "Multiply") {
      echo $firstOp * $secondOp;
    }
    // Add divide by zero case
    else {
      if ($secondOp == 0){
        echo "Can't divide by zero please input a number other than 0";
      }
      else {
      echo $firstOp / $secondOp;
      }
    }
  }
}
else {
  echo "Missing value!";
}
