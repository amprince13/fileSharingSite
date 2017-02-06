<?php
session_start();
if (isset($_GET["newUser"])) {
  $newUser = (String)$_GET["newUser"];
  $_SESSION["userDirPath"] = "/home/amprince/userfiles/";
  $full_path = "/home/amprince/userfiles/".$newUser;
  $writeFilePath = "/home/amprince/userfiles/user.txt";
  file_put_contents($writeFilePath, $newUser."\n", FILE_APPEND);
  mkdir($full_path);
  $_GET["userName"] = "";
  header("Location: loginPage.html");
  exit;

}
 ?>
