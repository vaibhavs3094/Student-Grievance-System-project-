<!--<?php
require 'core.php';
require'connect.php';
if(!loggedin())
{
	if(isset($_POST['roll_no']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email'])  
		&& isset($_POST['password']) && isset($_POST['password_again']))
	{
		$roll_no=$_POST['roll_no'];
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$password_again=$_POST['password_again'];
		$password_hash=md5($password);

		if(!empty($roll_no) && !empty($first_name) && !empty($last_name) && !empty($email) && !empty($password) && !empty($password_again))
		{
			if($password!=$password_again)
			{
				echo 'Passwords do not match.';
			}
			else
			{
				$query="SELECT `roll_no` FROM `student_registration` WHERE `roll_no`='$roll_no'";
				$query_run=mysql_query($query);
				if(mysql_num_rows($query_run==1))
				{
					echo 'Roll number'.$roll_no.'already exists';
				}
				else
				{
					$query="INSERT INTO `student_registration` VALUES('','".mysql_real_escape_string($roll_no)."',
						'".mysql_real_escape_string($first_name)."',
						'".mysql_real_escape_string($last_name)."','".mysql_real_escape_string($email)."',
						'".mysql_real_escape_string($password_hash)."')";
						if($query_run=mysql_query($query))
						{
							header('Location:register_success.php');
						}
						else
						{
							echo "'Sorry we could not register you.'<a href='http://localhost/varun/loginform.php'>Register again</a>";
						}
				}
			}
		}
	}
}
else
{
	echo 'All fields are mandatory';
}
?>
<!DOCTYPE html>
<html>
<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <span class="navbar-header page-scroll"><a class="navbar-brand page-scroll" href="#page-top">Student Support System IIPS,Davv</a></span> 
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="hidden"> <a href="#page-top"></a> </li>
        <li> <a class="page-scroll" href="#services">Features</a> </li>
        <li> <a class="page-scroll" href="#portfolio">Rights</a> </li>
        <li> <a class="page-scroll" href="#about">About</a> </li>
        <li> <a class="page-scroll" href="#team">Team</a> </li>
        <li> <a class="page-scroll" href="#contact">Contact</a> </li>
        <li> <a class ="page-scroll" href="file:///C:/Users/Administrator/Desktop/login%20form%20template/index.html">Log in </a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<head>
<title> student support system</title>
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
			  	  
				  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><div class="top-img"><img src="images/top-lock.png" alt=""/></div><span>Register</span></li>
				  
			  </ul>		
			  <!---->		  	 
			<div class="resp-tabs-container">

			<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
								<div class="facts">
										<!--login1-->
									<div class="register">
										<form action ="file:///C:/Users/Administrator/Desktop/horizontal-responsive-form-ui/index.html" method ="post">

											<p>Roll Number(eg.IT-2K12-XX) </p>
											<input type="text" name="roll_no" class="text" value="" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >

											<p>First Name </p>
											<input type="text" class="text" value="" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
											<p>Last Name </p>
											<input type="text" class="text" value="" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >

											<p>Email Address </p>
											<input type="email" class="text" value="" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
											<p>Password </p>
											<input type="password" value="" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
											<p>Password again</p>
											<input type="password" value="" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
											
											<div class="sign-up">
												<input type="reset" value="Reset">
												<input type="submit"   value="Sign In" >
												<a href  ="file:///C:/Users/Administrator/Desktop/horizontal-responsive-form-ui/index.html"></a>
												<div class="clear"> </div>
											</div>
										</form>

									</div>
								</div>
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
</html>		-->
	