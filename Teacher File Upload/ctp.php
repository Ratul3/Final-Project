<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tuition Provider</title>
</head>
<body>
<fieldset>
		<legend><h1>TUITION PROVIDER</h1></legend>
		1. Tomal: 01911111111<br/>
		2. Tanvir: 01833333333<br/><br/>
			
		 <button onclick="goBack()">Back</button>

<script>
function goBack() {
  window.history.back();
}
</script> 
		</fieldset>
		</body>
		</html>