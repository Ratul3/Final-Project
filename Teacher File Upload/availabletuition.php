<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Available Tuition</title>
</head>
<body>
<fieldset>
		<legend><h1>AVAILABLE TUITION</h1></legend>
		<table border="1">
		<tr>
		<td>Area</td><td>Class</td><td>Subject</td><td>Salary</td><td>Contact</td>
		</tr>
		<tr>
		<td>Mirpur</td><td>9</td><td>Higher Math</td><td>2000</td><td>01255555555</td>
		</tr>
		
		<tr>
		<td>Dhanmondi</td><td>8</td><td>all</td><td>4000</td><td>01565839532</td>
		</tr>
		
		
		<tr>
		<td>Banani</td><td>O level</td><td>all</td><td>8000</td><td>01734209541</td>
		</tr>
		<tr>
		<td>Uttara</td><td>11</td><td>ICT</td><td>1500</td><td>01623787359</td>
		</tr>
		</table>
		<br/>
		 <button onclick="goBack()">Back</button>

<script>
function goBack() {
  window.history.back();
}
</script> 
		</fieldset>
		</body>
		</html>