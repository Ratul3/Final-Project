<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload Notes</title>
</head>
<body>
<form method="POST" action="notescheck.php">
<fieldset>
		<legend><h1>UPLOAD NOTES</h1></legend>
		 Upload Notes<input type="file" id="myFile" name="filename"><br/><br/>
		 <input type="submit" name="submit" value="Submit">
		 <button onclick="goBack()">Back</button>

<script>
function goBack() {
  window.history.back();
}
</script> 
		</fieldset>
		</form>
		</body>
		</html>