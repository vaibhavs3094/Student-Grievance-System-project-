<?php
if(isset($_POST['roll_no']) && isset($_POST['password']))
{
	$roll_no=$_POST['roll_no'];
	$password =$_POST['password'];
	$password_hash=md5('password');
	if(!empty($roll_no) && !empty($password))
		  		{
		  			$query="SELECT `roll_no`,`password` FROM `login` WHERE `roll_no`='$roll_no' AND `password`='$password_hash'";
		  		}
		  		if($query_run=mysql_query($query))
		  		{
		  			$query_num_rows=mysql_num_rows($query_run);
		  		}
		  		if($query_num_rows==0)
		  		{
		  			echo 'invalid username or password';
		  		}
		  			elseif ($query_num_rows==1) 
		  			{
		  				$roll_no=mysql_result($query_run, 'roll_no');//check if 2nd arg is a no. .In ex. 0 is given but i think its a row no.
		  				$_SESSION['roll_no']=$roll_no;
		  				header('Location:http://localhost/varun/loginform.php');
		  			}
		 else
		 {
		  	echo 'roll_no and password cannot be empty';
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
			  	  
				  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><div class="top-img"><img src="images/top-lock.png" alt=""/></div><span>Login</span></li>
				  
			  </ul>		
			  <!---->		  	 
			<div class="resp-tabs-container">
						
			 <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
					 	<div class="facts">
							 <div class="login">
							<div class="buttons">
								<!--<ul>
								    <li class="fb">
										<a href="#" class="hvr-bounce-to-bottom">FACEBOOK</a>
									</li>
									<li class="twr">
										<a href="#" class="hvr-bounce-to-top">TWITTER</a>
									</li>
									<div class="clear"> </div>
								</ul>-->
							</div>
							<form>
								<input type="text" class="text" value="Roll number(eg.IT-2K12-XX)" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" ><a href="#" class=" icon email"></a>

								<input type="password" value="Password" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><a href="#" class=" icon lock"></a>

								<div class="p-container">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Keep me logged in</label>
									<div class="submit two">
									<input type="submit" onclick="myFunction()" value="LOG IN" >
									</div>
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
</html>