<?php	
	session_start();
	
	 if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
<fieldset>
		<legend><h1>PROFILE</h1></legend>
		<center><img src="upload/<?=$_SESSION['pic']?>" width="150" height="180"></center><br/>
		<table border="1">
		<tr>
		<td>Name:</td><td><?= $_COOKIE['username']?></td>
		</tr>
		
		<tr>
		<td>E-mail:</td><td>  abc@gmail.com </td>
		</tr>
		
		
		
		<tr>
		<td>Gender:</td><td> Male</td>
		</tr>
		
		<tr>
		<td>DOB:</td><td>01/01/1994</td>
		</tr>
		
		
		<tr>
		<td>Blood Group:</td><td>B+</td>
		</tr>
		
		
		
		<tr>
		<td>Education:</td><td>SSC, HSC</td>
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