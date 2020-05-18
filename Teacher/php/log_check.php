<?php

	
						include('../service/function.php');
						if(isset($_POST['submit']))
						{
						
							$nname = $_POST['nname'];
							$type=	$_POST['type'];
							$password = $_POST['password'];
							$user = validate($nname, $password, $type);
							 if(count($user) > 0 )
								{
									echo "yes";
									$_SESSION['user'] = $user;
									session_start();
								$_SESSION['nname']= $_POST['nname'];
								$_SESSION['type']=	$_POST['type'];
								if($_SESSION['type']== "student")
									{
										header("location: ../views/shome.php");
									}
								if($_SESSION['type']== "teacher")
									{
										header("location: ../views/thome.php");
									}
								
								
							    }
							else
							{
								header("location:../views/login.php");
							}

							
						
						
						
						}
							
					?>
					