<?php
	session_start();
	//make sure file name is valid
	//check extension
	$fileName = basename($_FILES['uploadedfile']['name']);
	$userName = $_SESSION['userName'];
	$userPath = $_SESSION["userDirPath"].$userName."/";
	//preg_match finds specified string
	//'/^[\w_\.\-]+$/' why?
	/*if(!preg_match('/^[\w_\.\-]+$/', $fileName)){
		echo "Invalid Input";
	}

	//make sure user name is valid
	//'/^[\w_\-]+$/' why?
	//$userName = $_SESSION['userName'];
	if(!preg_match('/^[\w_\.\-]+$/', $userName)){
		echo "Invalid UserName";
	}*/

	//where to move file
	$file_path = $_SESSION["userDirPath"] . $_SESSION["userName"] . "/" . $fileName;
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $file_path)){
		echo "Upload success";
	}else{
		echo "Failed upload";
	}
header("Location: fileMain.php");
exit;


 ?>
