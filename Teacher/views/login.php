

<html>
<head>
		
</head>
<body>
		
		<html>
			<head>
				<title><b>Log IN</b></title>
			</head>
			<form action="../php/log_check.php" method="post">
				<body>
					<h3>UserName</h3>
					<input type="text" name="nname" value="" required />
					<h3>User Type</h3>
					<input type="radio" name="type" value="admin" required/>Admin
						<input type="radio" name="type" value="tp" />Tution Provider
						<input type="radio" name="type" value="teacher" />Teacher
						<input type="radio" name="type" value="student" />Student
						<div id="type" class="val"></div>
					<h3>Password</h3>
					<input type="password" name="password" value="" required />
					<br /><br />
					<input type="submit" name="submit" value="submit" />
					<a href="registration.php">GO to Registration</a>
					
					
				</body>
			</form>
		</html>
		
		
		

</body>
</html>
