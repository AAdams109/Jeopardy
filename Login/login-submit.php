<!--Login Submission PHP File that checks user login.-->
<?php session_start(); /* Starts the session */

if(!isset($_SESSION['Username']) && !isset($_SESSION['Password'])){
	header("Location: login.php");
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title></title>
		<link href="../Styles/login-submit-style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="container">
			<h1> Nice to see you, <?php print $_SESSION['Username'] ?>! </h1>
			<p> If you want to logout, you can <a href="./logout.php"> here</a></p>
		<!--Hanim this link needs to be styled as a button -->
			<p>Play Jeopardy by clicking the logo!</p>
			
				<?php echo $_SESSION["Username"] ?>
				<?php echo $_SESSION["Password"] ?> <br><br>
				<div id="image">
				<a href="../Jeopardy/jeopardy.php"> <img src="../Resources/Jeopardy_logo.png">
				</div>
		</div>
	</body>
</html> 