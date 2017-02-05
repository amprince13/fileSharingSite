<?php
session_start();
if (isset($_GET["newUser"])) {
  $newUser = (String)$_GET["newUser"];
  $_SESSION["userDirPath"] = "/home/amprince/userfiles/";
  $full_path = "/home/amprince/userfiles/".$newUser;
  $writeFilePath = "/home/amprince/userfiles/user.txt";
  $writeFile = fopen($writeFilePath, "w");
  fwrite($writeFile, $newUser);
  mkdir($full_path);
  echo $newUser;
  //header("Location: fileMain.php");
  //exit;
}
 ?>
