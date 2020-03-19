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
<form method="POST" action="mexamcheck.php">
<fieldset>
		<legend><h1>EXAM</h1></legend>
		<b>Question: </b> <input type="text" name="question" value=""><br/><br/>
		<b>Answer: </b><input type="text" name="answer" value=""><br/><br/>
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