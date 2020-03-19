<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ratings</title>
</head>
<body>
<fieldset>
		<legend><h1>RATINGS & REVIEW</h1></legend>
		1. Redoy: Boss faculty for math (5*)<br/>
		2. Limon: Very friendly (5*)<br/><br/>
			
		 <button onclick="goBack()">Back</button>

<script>
function goBack() {
  window.history.back();
}
</script> 
		</fieldset>
		</body>
		</html>