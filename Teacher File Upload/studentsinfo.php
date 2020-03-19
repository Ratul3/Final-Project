<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student's Information</title>
</head>
<body>
<fieldset>
		<legend><h1>STUDENT'S INFORMATION</h1></legend>
		<table border="1">
		<tr>
		<td>Name</td><td>Gender</td><td>Education</td><td>Contact No.</td>
		</tr>
		
		<tr>
		<td>Rayhan</td><td>Male</td><td>SSC</td><td>01684251381</td>
		</tr>
		
		
		
		<tr>
	<td>Akash</td><td>Male</td><td>SSC</td><td>01679040644</td>
		</tr>
		
		<tr>
		<td>Arnob</td><td>Male</td><td>SSC, HSC</td><td>01768382184</td>
		</tr>
		
		
		<tr>
		<td>Rasel</td><td>Male</td><td>SSC</td><td>01776095886</td>
		</tr>
		
		
		
		<tr>
	<td>Iqbal</td><td>Male</td><td>JSC</td><td>01536146176</td>
		</tr>
		

		</table><br/>
		
		
		
		
		
		
		
		
		 <button onclick="goBack()">Back</button>

<script>
function goBack() {
  window.history.back();
}
</script> 
		</fieldset>
		</body>
		</html>