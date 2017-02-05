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
    // Open up the user directory and read through the files in it
    // Displays a link that you can click on and access the file through viewFile.php
    if (is_dir($userPath)) {
        if ($dh = opendir($userPath)) {
          //printf("<form action=deleteFile.php method=get>");
          while (($file = readdir($dh)) !== false) {
            if (!(trim($file) == "..") && !(trim($file) == ".")) {
              //printf("<input type=radio value=%s name=name> ", $file);
              printf("<a href='viewFile.php?getFile=%s&user=%s'>%s</a><br>", $file, $userName, $file);
            }
          }
          //printf("<input type=submit value=Delete name=deleteFile></form>");
          closedir($dh);
        }
      }
      // Allows the user to delete files through deletePrep.php
      echo "<br>Click below too delete files";
      printf("<form action=deletePrep.php method=get>");
      printf("<input type=submit value=Delete name=deletePrep><br></form>");

      // Allows the user to upload files trhough uploader.php
      echo "<br>Click below to upload files<br>";
      printf("<form enctype=multipart/form-data action=uploader.php method=post>");
    	printf("<input type=hidden name=MAX_FILE_SIZE value=20000000 />");
    	printf("<input type=file name=uploadedfile>");
    	printf("<input type=submit name=uploadFile></form>");

      //echo "<br>Click below to add user";
      //printf("<form action=addUser.php method=get>");
      //printf("<input type=submit value=Add name=newUser<br></form>");





    /*$fileName = "austin.txt";
    //$fileName = $_GET['file'];
    $full_path = sprintf("/srv/uploads/%s/%s", $userName, $fileName);
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mime = $finfo->file($full_path);
    header("Content-Type: ".$mime);
    readfile($full_path);*/

     ?>


  </body>
</html>
