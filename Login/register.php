<!--Jeopardy Registration PHP File, allowing new players to enter their preferred username & password. -->
<!DOCTYPE html PUBLIC "-//W3C//Dli XHTML 1.1//EN" "http://www.w3.org/ul/xhtml11/Dli/xhtml11.dli">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Jeopardy Registration</title>
		<link href="./style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
    <section>
            <div class="container">
			<!--form start-->
				<form action="./register-submit.php" method="post" name="register">
                    <h1>Registration</h1>
                    <div class="inputbox">
                        <input type="text" required placeholder="username" value="username">
                        <label for="username"></label>                    
                    </div>
                    <div class="inputbox">
                        <input type="passcode" required placeholder="passcode" value="passcode">
                        <label for="passcode"></label>
                    </div>
                    <button type="submit" class="button" onclick="">Register</button>
                </form>
			<!--form end-->
            </div>
    </section>	
	</body>
</html>