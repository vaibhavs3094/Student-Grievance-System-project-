<?php
include 'connect.php';
include 'core.php';
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
		  				header('Location:http://localhost/varun/startbootstrap-simple-sidebar-1.0.3/#');

		  			
		  		}
		  			elseif ($query_num_rows==0) 
		  			{
		  				//echo 'invalid roll number or password';
		  				echo "<script>alert('invalid roll number or password')</script>";
		  			}
		 }											
		
	}
	else
	{
		echo "<script>alert('roll number and password cannot be empty')</script>";
	}
}



?>




<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Student Support System</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/five.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,600,600italic' rel='stylesheet' type='text/css'>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" 
      data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> 
      <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <span class="navbar-header page-scroll"><a class="navbar-brand page-scroll" 
    href="http://localhost/varun/index_main.html">Student Support System IIPS DAVV</a></span> 
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<head>
<title> </title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegent Tab Forms,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion           
							width: 'auto', //auto or any width like 600px
							fit: true   // 100% fit in a container
						});
					});
				   </script>

<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700,200italic,300italic,400italic,600italic|Lora:400,700,400italic,700italic|Raleway:400,500,300,600,700,200,100' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>
<div class="main">
		 <h1>     </h1>
	 <div class="sap_tabs">	
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			 <ul class="resp-tabs-list">
			  	  <li class="" aria-controls="" role=""><div class="">
			  	  <img src="images/top-key.png" alt=""/></div><span>Log in</span>
			  	  	
				</li>
				<!--<li class="" aria-controls="" role=""><div class="">-->
				  <!--<img src="images/top-lock.png" alt=""/></div><span>Reset Password</span></li>-->
				  
				 <!-- <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><div class="top-img">
				  <img src="images/top-key.png" alt=""/></div><span></span>Log in</li>-->
				  <div class="clear"></div>
			  </ul>		
			  <!---->		  	 
			<div class="resp-tabs-container">
					<!--<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
					<div class="facts">-->
							<!--login1-->
						<!--<div class="register">
							<form action =" file:///C:/Users/Administrator/Desktop/startbootstrap-simple-sidebar-1.0.3/index.html" method ="post">

								<p>First Name </p>
								<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
								<p>Last Name </p>
								<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
								<p>Email Address </p>
								<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
								<p>Password </p>
								<input type="password" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
								
								<div class="sign-up">
									<input type="reset" value="Reset">
									 
									<input type="submit"   value="Sign In" >
 
									<div class="clear"> </div>
								</div>
							</form>

						</div>-->
					<!--</div>
				</div>-->		
			 <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
					 	<div class="facts">
							 <div class="login">
							<div class="buttons">
								

							</div>
							 <form action =" new_login3.php" method ="post">
								<input type="text" required class="text" value="Roll Number" name="roll_no" 
								onfocus="this.value = '';" onblur="if (this.value == '') 
								{this.value = 'Roll Number';}"><a href="#" bb class=" icon email"></a>

								<!--<input type="text" required class="text" value="Password" name="password" -->
								<input type="password" required value="Password" name="password" 
								onfocus="this.value = '';" onblur="if (this.value == '') 
								{this.value = 'Password';}"><a href="#" class="icon lock"></a>

								<div class="p-container">
									<!--<label class="checkbox"><input type="checkbox" name="checkbox" checked></label>-->
									<div class="submit two">
									<input type="submit" onclick="myFunction()" value="LOG IN" >
									</div>
									<div class="clear"> </div>
								</div>

							</form>
					</div>
				</div> 
			</div> 			        					 
				<!-- <div class="tab-3 resp-tab-content" aria-labelledby="tab_item-2 item3">
				     	<div class="facts">
									<form class="sub">
										<p>Current Password </p>
										<input type="password" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
										<p>New Password </p>
										<input type="password" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
										<p>Re-Type-Password </p>
										<input type="password" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
										<div class="submit three">
											<input type="submit" onclick="myFunction()" value="Update Password" >
										</div>
									</form>
									</div>-->
				         	</div>           	      
				        </div>	
				     </div>	
		        </div>
	        </div>
	     </div>

	<!--start-copyright-->
   		<div class="copy-right">
   			<div class="wrap">
				
		</div>
	</div>
	<!--//end-copyright-->
</body>
</html>