<?php
require 'core.php';
require'connect.php';

if(!loggedin())
{ 
	if(isset($_POST['register']))
	{  
		// echo 'ok';
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
				echo "<script>alert('Passwords do not match')</script>";
				//echo 'Passwords do not match.';
			}
			else
			{
			     $query="SELECT `roll_no` FROM `student_registration` WHERE `roll_no`='$roll_no'";
				$query_run=mysql_query($query);
				$query_num_rows=mysql_num_rows($query_run);
				if($query_num_rows==1)//($query_run==1)
				{
					echo "<script>alert('Roll number ".$roll_no." already exists')</script>";
					//echo "'Roll number'.$roll_no.'already exists'";
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


}

/*else
{
	echo 'You are logged in.';
}*/
?>




















 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

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
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Student Support System IIPS DAVV</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#features">Features</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#cells">Cells</a>
                    </li>
                    <li>
                    <li class="page-scroll">
                        <a href="">Register</a>
                    </li>
                    <li class="page-scroll">
                        <a href="">Student Section</a>
                    </li>
                    <li class="page-scroll">
                        <a href="">Authority Login</a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

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
			<div id="horizontalTab" align="center" style="display: block; width: 100%; margin: 0px;">
			  <ul class="resp-tabs-list">
			  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><div class="top-img"  align="cent" >
			  	  <img src="images/top-note.png" alt=""/></div><span align="center">Register</span>
			  	  	
				</li>
				 <!-- <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><div class="top-img">
				  <img src="images/top-lock.png" alt=""/></div><span></span></li>-->
				 <!--  <li class="resp-tab-item lost" aria-controls="tab_item-2" role="tab">-->
				 <!-- <div class="top-img"><img src="images/top-key.png" alt=""/></div>--><span>
				  </span></li>
				  <div class="clear"></div>
			  </ul>		
			  <!---->		  	 
			<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
					<div class="facts">
							<!--login1-->
						<div class="register">
							<form action ="new_register3.php" method ="post">

							    <p>Roll Number </p>
								<input type="text" required class="text" name="roll_no" value="" onfocus="this.value = '';" 
								 onblur="if (this.value == '') {this.value = '';}" >
								<p>First Name </p>
								<input type="text" required class="text" name="first_name" value="" onfocus="this.value = '';" 
								 onblur="if (this.value == '') {this.value = '';}" >
								<p>Last Name </p>
								<input type="text" class="text" name="last_name" required value="" onfocus="this.value = '';"
								onblur="if (this.value == '') {this.value = '';}" >
								<p>Email Address </p>
								<input type="email" name="email" class="text" required value="" onfocus="this.value = '';" 
								 onblur="if (this.value == '') {this.value = '';}" >
								<p>Password </p>
								<input type="password" name="password" required value="" 
								 onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
								<p>Password Again</p>
								<input type="password" required name="password_again" value=""  onfocus="this.value = '';" 
								onblur="if (this.value == '') {this.value = '';}">
								
								<div class="sign-up">
									<input type="reset" value="Reset">
									 
									<input type="submit"  name="register"  value="Register" >
 
									<!--<div class="clear"> </div>-->
								</div>
							</form>

						</div>
					</div>
				</div>	