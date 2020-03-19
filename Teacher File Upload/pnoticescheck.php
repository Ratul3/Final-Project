<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
	$notices = $_REQUEST['notices'];
	$to = $_REQUEST['to'];
		
		
		if(empty(trim($notices)) || empty(trim($to))){
			echo "Null submission found!";
		}else{
        echo("Successfully Posted Notice!");
		}
	}
?>