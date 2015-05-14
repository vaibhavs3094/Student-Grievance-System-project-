<?php
require 'core.php';
require'connect.php';

//if(!loggedin())
//{
	if(isset($_POST['roll_no']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email'])  
		&& isset($_POST['password']) && isset($_POST['password_again']))
	{
		$roll_no=mysql_real_escape_string($_POST['roll_no']);
		$first_name=mysql_real_escape_string($_POST['first_name']);
		$last_name=mysql_real_escape_string($_POST['last_name']);
		$email=mysql_real_escape_string($_POST['email']);
		$password=mysql_real_escape_string($_POST['password']);
		$password_again=mysql_real_escape_string($_POST['password_again']);
		//$password_hash=mysql_real_escape_string(md5($password));
		//$password_hash=mysql_real_escape_string($password);
		
		if(!empty($roll_no) && !empty($first_name) && !empty($last_name) && !empty($email) && !empty($password) && !empty($password_again))
		{
			if($password!=$password_again)
			{
				echo 'Passwords do not match.';
			}
			else
			{
				echo $query="SELECT `roll_no` FROM `student_registration` WHERE `roll_no`='$roll_no'";
				$query_run=mysql_query($query);
				$query_num_rows=mysql_num_rows($query_run);
				if($query_num_rows==1)//($query_run==1)
				{
					echo "'Roll number'.$roll_no.'already exists'";
				}
				else
				{
					echo $query="INSERT INTO `student_registration` VALUES('','$roll_no','$first_name','$last_name','$email','$password')";
						
						if($query_run=mysql_query($query))
						{
							header('Location:register_success.php'); 


						}
						else
						{
							echo "'Sorry we could not register you.'<a href='http://localhost/varun/new_register.php'>Register again</a>";
						}
				}
			}
		}
	}
//}

//else
//{
//	echo 'All fields are mandatory';
//}
?>






<form action="new_register.php" method="POST">
Roll Number <br><input type="text" name="roll_no" required> <br><br>
First Name <br><input type="text" name="first_name" required> <br><br>
Last Name <br><input type="text" name="last_name" required> <br><br>
E-mail <br><input type="email" name="email" required> <br><br>
Password <br><input type="password" name="password" required> <br><br>
Password Again <br><input type="password" name="password_again" required> <br><br>
<input type="submit" value="Sign in">
