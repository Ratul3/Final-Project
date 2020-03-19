<?php
	session_start();
		

	?>
<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION FORM</title>
</head>
<body>
	
	
			
	
	
	<form method="POST" action="regcheck.php" enctype="multipart/form-data">
	<fieldset>
		<legend><h1>REGISTRATION</h1></legend>
			Name<br/><input type="text" name="uname" value="" required><br/>
			Password<br/><input type="password" name="password" value="" required><br/>
			ID<br/><input type="number" name="uid" value="" required><br/>
			Gender<br/><input type="radio" name="gender" value="M" required>Male
						<input type="radio" name="gender" value="F" />Female
						<input type="radio" name="gender" value="O" />Other
			<br/>
			Education<br/><input type="checkbox" name="education[]" value="ssc" required>S.S.C.
						<input type="checkbox" name="education[]" value="hsc" />H.S.C
						<input type="checkbox" name="education[]" value="bsc" />B.SC.<br/>
			Picture: <input type="file" name="mypic" required><br/><br/>
			
				<input type="submit" name="submit" value="Sign Up">
				<input type="reset" name="reset" value="reset">
				<a href="login.php">Sign In</a>	
			
	</fieldset>
	</form>
</body>
</html>




