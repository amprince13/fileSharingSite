<?php
	//start session
	session_start();
	$userName = (String)$_GET["userName"];
	$_SESSION["userDirPath"] = "/home/amprince/userfiles/";
	$readFile = fopen($_SESSION["userDirPath"]."user.txt", "r");
	$lineNum = 1;
	// check if user name was entered
	if(isset($_GET["login"]) && !empty($userName)){
		while(!feof($readFile)){
			$readLine = fgets($readFile);
			if (trim($userName) == trim($readLine)){
				$_SESSION["userName"] = $userName;
				echo "You are logging";
				header ("Location:fileMain.php");
				exit;
			}
			$lineNum++;
		}
	echo "User not found";
	fclose($readFile);

	}

 ?>
