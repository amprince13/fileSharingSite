<?php
session_start();
$userName = $_SESSION["userName"];
echo "Please select the file below that you would like to delete <br>";
$userPath = $_SESSION["userDirPath"].$userName."/";
if (is_dir($userPath)) {
    if ($dh = opendir($userPath)) {
      printf("<form action=deleteFile.php method=get>");
      while (($file = readdir($dh)) !== false) {
        if (!(trim($file) == "..") && !(trim($file) == ".")) {
          printf("<input type=radio value=%s name=name> ", $file);
          printf("%s<br>", $file);
        }
      }
      printf("<input type=submit value=Delete name=deleteFile></form>");
      closedir($dh);
    }
  }
?>
