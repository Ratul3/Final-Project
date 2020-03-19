<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Salary</title>
</head>
<body>
<fieldset>
		<legend><h1>SALARY</h1></legend>
			<table border='1'>
			<tr>
			<td>Student Name</td>
			<td>Salary</td>
			</tr>
			<tr>
			<td>Rasel</td>
			<td>2000</td>
			</tr>
			
			
			<tr>
			<td>Akash</td>
			<td>6000</td>
			</tr>
			
			
			<tr>
			<td>Rayhan</td>
			<td>5000</td>
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