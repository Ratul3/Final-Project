<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
	$question = $_REQUEST['question'];

		
		
		if(empty(trim($question))){
			echo "Null submission found!";
		}else{
        header("location: mexamdone.php");
		}
	}
?>