<?php
session_start();

	if(isset($_REQUEST['submit'])){

		$uname =  $_POST['uname'];
		$password =  $_POST['password'];
		$uid = $_POST['uid'].'|';
		$gender =  $_POST['gender'].'|';
		$education =  $_POST['education'];
		
		
		
		
		
		$filename = $_FILES['mypic']['name'];
			$file_type = $_FILES['mypic']['type'];
				$file_size = $_FILES['mypic']['size'];
		
		$src = $_FILES['mypic']['tmp_name'];
		
$dest = "upload/".$filename;
		
	



	
$length=strlen($uname);
$plength=strlen($password);
$a=0;

if(isset($_POST['uname']))
{
	$uname=$_POST['uname'];
	//$length=strlen($uname);
	if($length>=3 && is_numeric($uname)==false)
{
	$uname=$_POST['uname'].'|';
	$a=$a+1;
}
else{echo "name cannot start with number<br/>";}
	
	
}else
{
	echo "fill name";
}





if(isset($_POST['password']))
{
	$password=$_POST['password'].'|';
	//$plength=strlen($password);
	if($plength>5)
{
	$a=$a+1;
}
else{echo "passwordmin 6";}
	
	
}else
{
	echo "fill pass";
}



if(move_uploaded_file($src, $dest)){
			$_SESSION['pic'] = $filename;
			header('location: profile.php');
			$a=$a+1;
		}else{
			echo "Error";
		}




if(isset($_POST['gender']))
{
	$a=$a+1;
}else
{
	echo("select  gender");
}






if($a>3)
{
$file=fopen('user.txt','a');
fwrite($file,$uname);
fwrite($file,$password);
fwrite($file,$uid);
fwrite($file,$gender);
fwrite($file,$filename);

fclose($file);	
		
		header("location: login.php");
		}
	}
?>