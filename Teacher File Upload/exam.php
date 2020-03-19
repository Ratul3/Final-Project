<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exam</title>
</head>
<body>
<fieldset>
		<legend><h1>EXAM & GRADES</h1></legend>
		<a href="mexam.php">Take Exam</a>
		<a href="grades.php">Grades</a><br/><br/>
		 <button onclick="goBack()">Back</button>

<script>
function goBack() {
  window.history.back();
}
</script> 
		</fieldset>
		</body>
		</html>