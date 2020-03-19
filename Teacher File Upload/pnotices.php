<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Post Notices</title>
</head>
<body>
<form method="POST" action="pnoticescheck.php">
<fieldset>
		<legend><h1>POST NOTICES</h1></legend>
			<b>To: </b><input type="text" name="to" value=""><br/><br/>
			<b>Notice: </b><input type="text" name="notices" value=""><br/><br/>
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