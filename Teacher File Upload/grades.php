<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Grades</title>
</head>
<body>
<fieldset>
		<legend><h1>GRADES</h1></legend>
		<table border="1">
		<tr>
		<td>Student Name</td><td>Subject</td><td>Marks</td><td>Grade</td>
		</tr>
		
		<tr>
		<td>Rayhan</td><td>Math</td><td>100</td><td>A+</td>
		</tr>
		
		
		
		<tr>
	<td>Akash</td><td>Chemistry</td><td>100</td><td>A+</td>
		</tr>
		
		<tr>
		<td>Arnob</td><td>Biology</td><td>75</td><td>A</td>
		</tr>
		
		
		<tr>
		<td>Rasel</td><td>Physics</td><td>39</td><td>F</td>
		</tr>
		
		
		
		<tr>
	<td>Iqbal</td><td>Science</td><td>60</td><td>C</td>
		</tr>
		

		</table><br/>
		
		<input type="button" name="" value="Edit">
		 <button onclick="goBack()">Back</button>

<script>
function goBack() {
  window.history.back();
}
</script> 
		</fieldset>
		</body>
		</html>