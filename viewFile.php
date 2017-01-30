
<?php
session_start();

$fileName = $_GET['getFile'];

$full_path = sprintf("%s%s/%s", $_SESSION["userDirPath"], $_SESSION["userName"], $fileName);

$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime = $finfo->file($full_path);


header("Content-Type: ".$mime);
readfile($full_path);

 ?>
