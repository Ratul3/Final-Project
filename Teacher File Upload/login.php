<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="POST" action="logCheck.php">
	<fieldset>
		<legend><h1>LOGIN</h1></legend>
		Name<br/><input type="text" name="uname" value=""><br/>
		Password<br/> <input type="password" name="password" value=""><br/><br/>
		<input type="submit" name="submit" value="Submit"> <a href="registration.php">Register</a>
	</fieldset>
	</form>
</body>
</html>