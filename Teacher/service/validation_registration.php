<html>
<head>
</head>
<body>

<?php
		include('../service/db.php');
		
		$flag_err=0;
		$flag=0;
		
		if(empty($_POST['fname']) or empty($_POST['nname']) or empty($_POST['password']) or empty($_POST["gender"]) or empty($_POST["education"]) )
			{
				
				global $flag;
				echo "<section class='main'>
					</br></br></br></br></br></br>
						
					<table align='center' border='1' BORDERCOLOR=#FF0000>
									
							<tr>
							<td width=300px text-align:center><span style='color:#FFA500'><b>field can not be empty!!</b></span></td>
							</tr>
							</table>
							</section>";
				
				$flag+=1;
			}
			
		function nname($nname)
			{
				global $flag;
				nname2($nname);
				if(nickname2($nname) && $flag==0)
							{
								global $flag;
								echo "<section class='main'>
									</br></br></br></br></br></br>
									<table align='center' border='1' BORDERCOLOR=#FF0000>
									<tr>
									<td width=300px text-align:center><span style='color:#FFA500'><b>NICK NAME:you have to submit only 1 word!!</b></span></td>
									</tr>
									</table>
									</section>";
									
							$flag+=1;		
							}
			}
		function fname($fname)
			{
				global $flag;
				if(str_word_count($fname)<2 && $flag==0)
							{
								global $flag;
								$fname="";
								echo "<section class='main'>
									</br></br></br></br></br></br>
									<table align='center' border='1' BORDERCOLOR=#FF0000	>
									<tr>
									<td width=300px text-align:center><span style='color:#FFA500'><b>FULL NAME:you have to use your full name which contains minimum 2 WORDS!!</b></span></td>
									</tr>
									</table>
									</section>";
								$flag+=1;
							}
			}
			function passwordf()
				{
					global $flag;
					if($flag==0)
						{
								echo "<section class='main'>
							  </br></br></br></br>
							  <table align='center' border='1' BORDERCOLOR=#FF0000>
							  <tr>
						   	  <td width=300px text-align:center><span style='color:#FFA500'><b>PASSWORD:you have to use atleast 5 character!!</b></span></td>
								</tr>
								</table>
								</section>";
								$flag+=1;
						}
				}
			function congratulation($fname,$nname,$password,$gender,$education,$email,$folder,$type)
				{
					global $flag;
					if($flag==0)
					{		$con=mysqli_connect('localhost','root','','webtech');
							$sql = "insert into users (fname,nname,password,email,type,picsource,gender,education) values ('$fname','$nname','$password','$email','$type','$folder','$gender','$education')";
							if(mysqli_query($con, $sql))
							{
								echo "<section class='main'>
									</br></br></br></br></br></br>
									<table align='center' border='1' BORDERCOLOR=#FC8C41>
									<tr>
									<td width=300px text-align:center><span style='color:#00FF00'><b>You have Completed Your Registration.</br>Your user name is:::: ".$nname."</b></span></td>
									</tr>
									</table>
									</section>";
							}else{
									echo "</br></br>";
								echo "<section class='main'>
									</br></br></br></br>
									<table align='center' border='1' BORDERCOLOR=#FF0000>
									<tr>
									<td width=300px text-align:center><span style='color:#FFA500'><b>PLEASE FOLLOW THE INSTRUCTION!!!!</b></span></td>
									</tr>
									</table>
									</section>";
								}
					}				
				}
		function nname2($nickname)
			{
				global $flag;
				$result=nickname($nickname);
				
				if($result  && $flag==0)
					{
						global $flag;
						echo "<section class='main'>
						</br></br></br></br></br></br>
						<table align='center' border='1' BORDERCOLOR=#FF0000>
						<tr>
						<td width=300px text-align:center><span style='color:#FFA500'><b>Nick Name:you have to submit a unique name!!</b></span></td>
						</tr>
						</table>
						</section>";
						$flag+=1;
					
					}
							
				
			}
		
			
		
				
		function Validation($data)
			{
			$data=trim($data);
			$data=htmlspecialchars($data);
			return $data;
			}	
		function nickname2($data)
			{
				if(str_word_count($data)>1)
					{
						return true;
					}
				else
					{
						return false;
					}
			}			
	    function nickname($data)
						{
							$con=mysqli_connect('localhost','root','','webtech');
							$sql = "select * from users where nname='{$data}'";
							$result = mysqli_query($con, $sql);
							$user = mysqli_fetch_assoc($result);

							return $user;

						}
									
				
				
				
			
				
				
				
				
?>

	<table>
	<tr>
					<td><a href="../views/registration.php"><h3>Registration</h3></a></td>
					<td></td><td></td><td></td><td></td><td></td>
					<td><a href="../views/login.php"><h3>LogIn</h3></a></td>
					<tr>
	</table>
</body>

</html>




