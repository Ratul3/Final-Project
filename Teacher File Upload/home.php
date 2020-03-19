<?php	
	session_start();
	if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

<fieldset>
		<legend><h1>HOME</h1></legend>
		<h3>Welcome home! <?= $_COOKIE['username']?></h3><br/>
       <div align="center"><a href="profile.php">Profile</a></div><br/><br/>
        <div align="left"><a href="availabletuition.php">Available Tuition</a></div>
		<div align="right"><a href="offeredtuition.php">Offered Tuition</a></div><br/><br/>
		<div align="left"><a href="uploadnotes.php">Upload Notes</a></div>
		<div align="center"><a href="studentsinfo.php">Student's Information</a></div>
		<div align="right"><a href="exam.php">Exam & Grades</a></div><br/><br/>
		<div align="left"><a href="notices.php">Notices</a></div>
		<div align="center"><a href="salary.php">Salary</a></div>
		<div align="right"><a href="schedule.php">Class Schedule</a></div><br/><br/>
		<div align="left"><a href="ctp.php">Contact Tuition Provider</a></div>
		<div align="center"><a href="cta.php">Complain to Admin</a></div>
		<div align="right"><a href="ratings.php">Ratings & Review</a></div><br/><br/>
		<div align="center"><a href="logout.php">Logout</a></div><br/><br/>
		
		</fieldset>
</body>
</html>
