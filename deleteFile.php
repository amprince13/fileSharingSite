<?php
session_start();
$fileName = $_GET['name'];
$full_path = $_SESSION["userDirPath"] . $_SESSION["userName"] . "/" . $fileName;
unlink($full_path);
header("Location: fileMain.php");
exit;
?>
