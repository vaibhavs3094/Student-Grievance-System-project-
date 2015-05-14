<?php
require 'connect.php';
require 'core.php';

if(isset($_POST['roll_no']) && isset($_POST['password']))
{
	$roll_no=$_POST['roll_no'];
	$password =$_POST['password'];
	//$password_hash=md5($password);
	//$password_hash=$password;
	
	if(!empty($roll_no) && !empty($password))
	{
		 $query="SELECT `roll_no` FROM `student_registration` WHERE `roll_no`='$roll_no' AND `password`='$password'";
		// echo $query;
		 if($query_run=mysql_query($query))
		 {
		  	$query_num_rows=mysql_num_rows($query_run);
		  		
		  		if($query_num_rows==1)
		  		{
		  			$roll_no=mysql_result($query_run, 0);//check if 2nd arg is a no. .In ex. 0 is given but i think its a row no.
		  				$_SESSION['roll_no']=$roll_no;
		  				//echo "SESSEION VARIABLE : ".$_SESSION['roll_no'];
		  				header('Location:http://localhost/varun/complaint_template.php');

		  			
		  		}
		  			elseif ($query_num_rows==0) 
		  			{
		  				echo 'invalid roll number or password';
		  			}
		 }											
		
	}
		else
		 {
		  	echo 'roll number and password cannot be empty';
		 }
}

?>
<form action="new_login.php" method="POST">
Roll Number <br><input type="text" name="roll_no" required> <br><br>
Password <br><input type="password" name="password" required> <br><br>
<input type="submit" value="Login"></form>








	


