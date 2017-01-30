<?php 
	session_start();
	//make sure file name is valid
	//check extension
	$fileName = basename($_FILES['uploadedfile']['name']);

	//preg_match finds specified string
	//'/^[\w_\.\-]+$/' why?
	if(!preg_match('/^[\w_\.\-]+$/', $fileName)){
		echo "Invalid Input";
	}

	//make sure user name is valid
	//'/^[\w_\-]+$/' why?
	//$userName = $_SESSION['userName'];
	$userName = "zela";
	if(!preg_match('/^[\w_\.\-]+$/', $userName)){
		echo "Invalid UserName";
	}

	//where to move file
	$file_path = sprintf("../uploads/%s/%s", $userName, $fileName);
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $file_path)){
		echo "Upload success";
	}else{
		echo "Failed upload";
	}


 ?>