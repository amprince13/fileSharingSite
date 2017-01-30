<!DOCTYPE html>
<html>
  <head>
    <title>fileMain</title>
  </head>
  <body>
    <?php
    session_start();
    $userName = $_SESSION["userName"];
    echo "Welcome $userName you have some files waiting for you <br>";
    $userPath = $_SESSION["userDirPath"].$userName."/";

    if (is_dir($userPath)) {
        if ($dh = opendir($userPath)) {
          while (($file = readdir($dh)) !== false) {
            if (!(trim($file) == "..") && !(trim($file) == ".")) {
              printf("<a href='viewFile.php?getFile=%s&user=%s'>%s</a><br>", $file, $userName, $file);
            }
          }
          closedir($dh);
        }
      }


    /*$fileName = "austin.txt";
    //$fileName = $_GET['file'];
    $full_path = sprintf("/srv/uploads/%s/%s", $userName, $fileName);
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mime = $finfo->file($full_path);
    header("Content-Type: ".$mime);
    readfile($full_path);*/

     ?> <br>

  </body>
</html>
