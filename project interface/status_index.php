<?php
include 'connect.php';
include 'core.php';
if(isset($_POST['reference_no']))
{
  echo "asd";
  $reference_no=$_POST['reference_no'];
  if(!empty($reference_no))
  {
      echo 'success';
     $sql="SELECT status FROM `complaint_registration` WHERE `reference_no`='$reference_no'";
     echo $sql;
     if($result=mysqli_query($db,$sql))
     {
      while ($row=mysqli_fetch_row($result))
    {
    printf ("(%s)\n",$row["status"]);
    }
  // Free result set
  mysqli_free_result($result);
  }


    //printf ("%s \n",$row["status"]);


     //if($query_num_rows==1)//($query_run==1)
    // echo $query_num_rows['status'];
     //echo "<script>alert('.('status').')</script>";
     //$sqldata=mysql_query($query) or die("error");
    /* if($query_run=mysql_query($query))
     {
         $query_num_rows=mysql_fetch_array($query_run);
         echo '1';
          
          if($query_num_rows==1)
          {
            //echo $ref_no=mysql_fetch_array($query_run);
            echo '2';
            //echo "<script>alert($status)</script>";
            //echo "<p>",$row['id'],": ",$row['status']; 
             
              //echo( $query_num_rows['status']);
              
          }
          elseif ($query_num_rows==0) 
          {
              //echo 'invalid roll number or password';
              echo "<script>alert('invalid reference number')</script>";
               
          }
     }*/
     /*while ($row = mysql_fetch_array($sqldata))
     {
      echo $row['status'];
     }*/
  }
}
?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">


    <title>Status check</title>
    
    
    
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
    <h1>Status</h1><br>
  <form action="status_index2.php" method="post">
  <label>
  Reference Number
    <input type="text" name="reference_no" required placeholder="enter here">
    </label>
    <input type="submit"  class="login login-submit" value="Submit">
  </form>
    </div>
    <br><br><br><br><br><br><br><br><br>
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