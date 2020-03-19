<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
		
	
?>	
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
<form method="POST" action="ctacheck.php">
<fieldset>
		<legend><h1>COMPLAIN</h1></legend>
		<input type="text" name="complain" value=""><br/><br/>
		<input type="submit" name="submit" value="Submit">	
		 <button onclick="goBack()">Back</button>

<script>
function goBack() {
  window.history.back();
}
</script> 
		</fieldset>
		</body>
		</html>
	