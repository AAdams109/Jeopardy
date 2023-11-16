<?php 
function newGame(){	//sets each user's score to 0 in the text file
	$_SESSION['score'] = 0;
	$_SESSION['attempt'] = 0;
	
	foreach(file(".././Login/userdata.txt") as $line){	//get user data into array
		$arr = explode(",",$line);
		$initialStr = implode(",",$arr);	//saves inital user array
		$arr[2] = 0;
		$getNewStr = implode(",",$arr);	//saves array with new scores
		$replaceStr = $getNewStr."\n";
		$file_contents = file_get_contents(".././Login/userdata.txt"); //obtains lines from txt file
		$file_contents = str_replace($initialStr, $replaceStr, $file_contents);	//replace correct lines in txt file
		file_put_contents(".././Login/userdata.txt", $file_contents);
	}
	header('Location: jeopardy.php');	//redirect back to jeopardy board
}?>