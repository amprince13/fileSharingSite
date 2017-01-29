<!DOCTYPE html>
<html>
  <head>
    <title>mainViewPage</title>
  </head>
  <body>
    <h1>Welcome User</h1>
    <form action="welcomePage.php" method="get">
      User Name: <input type="text" name="userName">
      <input type="submit" name="Login">
    </form>



  </body>
</html>

<?php
  //session_start();
  $userName = $_GET['userName'];
  echo $userName;
  if ($userName == "Austin"){
    header("Location: firstPage.php");
    exit;
  }
  ?>
