<?php
/*Check user input submitted w register.php*/ 
		if(isset($_POST["username"]) &&!empty($_POST["username"])) {
			$username=$_POST["username"];
		} else {
			echo "Error, please make sure to fill in name.";
		}
		if(isset($_POST["passcode"]) &&!empty($_POST["passcode"])) {
			$passcode=$_POST["passcode"];
		} else {
			echo "Error, please make sure to fill in password.";
		}
		
	$checkfile = file_get_contents('./userdata.txt');	
	$users = explode("\n",$checkfile);
	
	foreach($users as $checkUser)
	{
		$checkUser = explode(",",$users);
		if($checkUser[0] !== $username) 
		{
			$userinput = $username.",".$passcode.",0\n";
			file_put_contents('./userdata.txt', $userinput, FILE_APPEND);
			echo "<h1> Welcome, " . $username . "</h1>";
			echo "<p> You have been successfully registered! To play jeopardy, please <a href="login.html"> login. </a>";
		} else {
			header("Location: error.html");
			exit();
		}
	}
?>