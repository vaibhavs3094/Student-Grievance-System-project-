<?php
require 'core.php';
require'connect.php';

//if(!loggedin())
//{ 
  if(isset($_POST['register']))
  {  
     //echo 'ok';
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
           $query="INSERT INTO `student_registration` VALUES('','$roll_no','$first_name','$last_name','$email','$password')";
            
            if($query_run=mysql_query($query))
            {
              header('Location:register_success.php'); 


            }
            else
            {
              echo "'Sorry we could not register you.
              '<a href='http://localhost/varun/new_register.php'>Register again</a>";
            }
        }
      }
    }
  }


//}

/*else
{
  echo 'You are logged in.';
}*/
?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">


    <title>Register</title>
    
    
    
    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

        <link rel="stylesheet" href="css/style.css">
<link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    
    
    
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
      l             <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/varun/startbootstrap-freelancer-1.0.3/">Student Support System IIPS DAVV</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://localhost/varun/startbootstrap-freelancer-1.0.3/#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://localhost/varun/startbootstrap-freelancer-1.0.3/#features">Features</a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://localhost/varun/startbootstrap-freelancer-1.0.3/#cells">Cells</a>
                    </li>
                    <li>
                    <li class="page-scroll">
                        <a href="http://localhost/varun/register_index.php#page-top">Register</a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://localhost/varun/login_index.php">Student Section</a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://localhost/varun/admin_panel/">Authority Login</a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="http://localhost/varun/startbootstrap-freelancer-1.0.3/#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
     <br><br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br><br>

    <div class="login-card">
    <h1>Register</h1><br>
  <form action="register_index.php" method="post">
  <label>
  Roll Number
    <input type="text" name="roll_no" required placeholder="Roll Number">
    </label>
    <label>
    First Name
    <input type="text" name="first_name" required placeholder="First Name">
    </label>
    <label>
    Last Name
    <input type="text" name="last_name" required placeholder="Last Name">
    </label>
    <label>
    E-mail
    <input type="text" name="email" required placeholder="Email">
    </label>
    <label>
    Password
    <input type="password" name="password" required placeholder="Password">
    </label>
    <label>
    Password Again
    <input type="password" name="password_again" required placeholder="Password Again">
    </label>
    <input type="submit"  name="register" class="login login-submit" value="Register">
  </form>
    
  <!--<div class="login-help">
    <a href="#">Register</a> • <a href="#">Forgot Password</a>
  </div>-->
</div>
<footer>
<div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy;<b> Created by:Vaibhav Sabharwal & Varun Wadhwani</b>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

    
    
    
    
  </body>
</html>