<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Notices</title>
</head>
<body>
<fieldset>
		<legend><h1>NOTICES</h1></legend>
			<a href="rnotices.php">Read Notices</a>
		   <a href="pnotices.php">Post Notice</a><br/><br/>
		 <button onclick="goBack()">Back</button>

<script>
function goBack() {
  window.history.back();
}
</script> 
		</fieldset>
		</body>
		</html>