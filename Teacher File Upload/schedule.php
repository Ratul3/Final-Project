<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Schedule</title>
</head>
<body>
<fieldset>
		<legend><h1>SCHEDULE</h1></legend>
			<table border='1'>
			
			<tr>
			<td>Student Name</td>
			<td>Day</td>
			<td>Time</td>
			</tr>
			
			
			<tr>
			<td>Arnob</td>
			<td>Sunday</td>
			<td>3-5 PM</td>
			</tr>
			
			<tr>
			<td>Emon</td>
			<td>Friday</td>
			<td>9-11 AM</td>
			</tr>
			
			<tr>
			<td>Ratul</td>
			<td>Monday</td>
			<td>2-3 PM</td>
			</tr>
			<table><br/>
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