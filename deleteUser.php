<?php
session_start();
$userName = $_SESSION["userName"];
$userPath = $_SESSION["userDirPath"].$userName."/";
$writeFilePath = "/home/amprince/userfiles/user.txt";
if (is_dir($userPath)) {
    if ($dh = opendir($userPath)) {
      //printf("<form action=deleteFile.php method=get>");
      while (($file = readdir($dh)) !== false) {
        if (!(trim($file) == "..") && !(trim($file) == ".")) {
          unlink($userPath.$file);
        }
      }

      closedir($dh);
    }
  }

$deleteDir = $_SESSION["userDirPath"].$userName;
rmdir($deleteDir);
$writeFilePath = "/home/amprince/userfiles/user.txt";
$contents = file_get_contents($writeFilePath);
$contents = str_replace($userName, '', $contents);
file_put_contents($writeFilePath, $contents);
header("Location: loginPage.html");
exit;
?>
