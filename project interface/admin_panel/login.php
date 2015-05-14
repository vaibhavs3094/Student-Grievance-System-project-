 






<html>
<head>
<h4>Panel</h4>
<tiltle> <b>ADMIN / COMMITTE MEMBER <b></tilte>

</head>
<body>
<?php include 'connect.php';?>


<?php include 'functions.php';?>
<?php include 'title_bar.php';?>


<h3>Login Here</h3>


<form method ='post'>
<?php
if(isset($_POST['submit'])){
	$username= $_POST['username'];
	$password= md5($_POST['password']);
	if(empty($username) or empty($password)){
		echo"<p>Fields Empty!</p>";

	}
	else {
		$query="SELECT id,password FROM users  WHERE username='$username' AND password='$password'";
		$check_login = mysql_query($query);
		//echo '<br>'.$query.'<br>';
		//echo $check_login = mysql_query($query);
		/*if($check_login = mysql_query($query)){
			echo "success";			
		}
		else{
			echo "failed";
		}*/
		if(mysql_num_rows($check_login)==1)
		{
			$run = mysql_fetch_array($check_login);
			$user_id = $run['id'];
			$type = $run['type'];
			if($type=='d'){
				echo"<p> your site is deactivated by the site admin</p>";

			}else {
				$_SESSION['user_id'] = $user_id;
				header('location:index.php');

			}

		}
		else{
			echo"<p>user name or password incorrect</p>";
		}
	}


}
?>
username: <br/>
<input type='text' name='username'/>
<br/><br/>
password:<br/>
<input type='password' name='password'/>
<br/>
<br/>
<input type='submit' name='submit' value='log in'/>
</form>

 



</body>
</html>