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

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">


    <title>Log-in</title>
    
    
    
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
                        <a href=" http://localhost/varun/login_index.php">Student Section</a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://localhost/varun/admin_panel/">Authorised Login</a>
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
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>

    <div class="login-card">
    <h1>Log-in</h1><br>
  <form action="login_index.php" method="post">
  <label>
  Roll Number
    <input type="text" name="roll_no" required placeholder="Roll Number">
    </label>
    <label>
    Password
    <input type="password" name="password" required placeholder="Password">
    </label>
    <input type="submit"  class="login login-submit" value="login">
  </form>

</div>
<br>
<br>
<br>


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

    
  <!--<div class="login-help">
    <a href="#">Register</a> • <a href="#">Forgot Password</a>
  </div>
</div>-->

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

    
    
    
    
  </body>
</html>
