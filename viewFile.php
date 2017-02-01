<?php
session_start();

$fileName = $_GET['getFile'];

$full_path = sprintf("%s%s/%s", $_SESSION["userDirPath"], $_SESSION["userName"], $fileName);
$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime = $finfo->file($full_path);
//$full_path_test = "/home/amprince/userfiles/amprince/IMG_1633.jpg";
//echo $full_path . "</br>";
//echo $mime;
// Finally, set the Content-Type header to the MIME type of the file, and display the file.
header("Content-Type: " .$mime );
readfile($full_path);


 ?>
