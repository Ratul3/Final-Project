<?php
	session_start();
if( isset($_REQUEST['submit'])){
	$complain = $_REQUEST['complain'];
	
		
		
		if(empty(trim($complain))){
			echo "Null submission found!";
		}else{
        echo("Successfully Posted Notice!");
		}
	}
	?>