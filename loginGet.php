<?php
	//start session
	session_start();
	$userName = (String)$_GET["userName"];
	$readFile = fopen("user.txt", "r");

	$lineNum = 1;
	// check if user name was entered
	if(isset($_GET["login"]) && !empty($userName)){
		while(!feof($readFile)){
			$readLine = (String)fgets($readFile);
			echo $readLine . "/n";
			echo $userName;
			if (trim($userName) == $readLine){
				$_SESSION["userName"] = $userName;
				echo "You are logging";
			}
			$lineNum++;
		}
	echo "User not found";

	}

//echo $_SESSION["userName"];

 ?>
