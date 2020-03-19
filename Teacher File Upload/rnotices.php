<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Read Notices</title>
</head>
<body>
<fieldset>
		<legend><h1>READ NOTICES</h1></legend>
		1. From: Akash => I will not be at home today<br/>
		2. From:Rasel => Please come a bit early today<br/><br/>
			
		 <button onclick="goBack()">Back</button>

<script>
function goBack() {
  window.history.back();
}
</script> 
		</fieldset>
		</body>
		</html>