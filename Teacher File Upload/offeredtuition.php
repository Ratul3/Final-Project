<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Offered Tuition</title>
</head>
<body>
<fieldset>
		<legend><h1>OFFERED TUITION</h1></legend>
		<table border="1">
		<tr>
		<td>Area</td><td>Class</td><td>Subject</td><td>Salary</td><td>Contact</td>
		</tr>
		<tr>
		<td>Agargaon</td><td>9</td><td>English</td><td>3000</td><td>01255555555</td>
		</tr>
		
		<tr>
		<td>Gulshan</td><td>4</td><td>all</td><td>4000</td><td>01565839532</td>
		</tr>
		
		
		<tr>
		<td>Farmgate</td><td>12</td><td>all</td><td>8000</td><td>01734209541</td>
		</tr>
		<tr>
		<td>Kuril</td><td>10</td><td>all</td><td>5000</td><td>01623787359</td>
		</tr>
		</table>
		<br/>
		
		
		 <button onclick="goBack()">Back</button>

<script>g
function goBack() {
  window.history.back();
}
</script> 
		</fieldset>
		</body>
		</html>