<?php
  require 'core.php';
  require 'connect.php';
  require 'onlyNumbers.html';
 /* if(!loggedin())
  {
    exit("Login to register your complaint");
  }*/
 if(isset($_POST['submit']))
  {
      
     //echo "All set";
      $name=mysql_real_escape_string($_POST['name']);
      $roll_no=mysql_real_escape_string($_POST['roll_no']);
      $phone_no=mysql_real_escape_string($_POST['phone_no']);
      $email=mysql_real_escape_string($_POST['email']);
      $complaint=mysql_real_escape_string($_POST['complaint']);
     // $age_of_complaint=mysql_real_escape_string($_POST['age_of_complaint']);
      $reference_no=rand(100,2003322);
    
        $query="INSERT INTO `complaint_registration` VALUES(' ','$name','$roll_no','$phone_no','$email',
          '$complaint','$reference_no', '')";
        #echo $query = "insert into complaint_registration VALUES ('',  'aa',  'sd', 9090,  'dsfdf@ga.com',  'dfdfdsfsdfsd',  'fdf', 909090)";
          
          
        if($query_run=mysql_query($query))                                                              
        {
          //echo'success';
          $_SESSION['roll_no']=$roll_no;
          //echo'success';
          
          echo "<script>alert('your reference number is ".$reference_no.".Refer it for future.')</script>";
         // echo 'success';                                               
        }
      else
      {
         echo "Sorry we could not register your complaint.";
         //header('Location:new_login3.php');
        
      }
    }
   
?>






<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">


    <title>Complaint Registration</title>
    
    
    
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

    <div class="login-card">
    <h1>Complaint Registration</h1><br>
  
     <form action="index_com1.php" method="POST">
  <div class="col-2">
    <label>
      Name
      <input type="text" required placeholder="What is your full name?" id="name" name="name" tabindex="1">
    </label>
  </div>
  <div class="col-2">
    <label>
      Roll Number
      <input type="text" required placeholder="Enter your Roll number " id="company" name="roll_no" tabindex="2">
    </label>
  </div>
  
  <div class="col-3">
    <label>
      Phone Number
      <input type="text" required placeholder="What is the best # to reach you?" id="phone" name="phone_no" tabindex="3">
    </label>
  </div>
  <div class="col-3">
    <label>
      Email
      <input type="text" required placeholder="What is your e-mail address?" id="email" name="email" tabindex="4">
    </label>
  </div>
  <div class="col-4">
    
  <label>
      Complaint
      <input type="text" required placeholder="What is the type of your complaint?" id="complaint" name="complaint" tabindex="5">
    </label>
    </div>
  <div class="col-5">
     
  </div>

   


    <!--<div class="col-4">
    <label>Any Proofs?</label>
    <center style="position:relative; margin-bottom:8px;"><input type="checkbox" name="proof" class="js-switch"></center>
  </div>
  <form action="upload" method="post" enctype="multipart/form-data">
            <label for="file_photo">Photo:</label>
            <input type="file" name="file_photo" id="file_photo" multiple>
            <input type="submit" value="Upload"><BR>



  <div class="col-4 switch">

    <label> Require Counselling ?</label>
    <center style="position:relative;margin-bottom:8px;"><input type="checkbox" class="js-switch"></center>
  </div>-->
  
  <div class="col-submit">
    <!--<button class="submitbtn">Submit Form</button>-->
    <button class="submitbtn" type="submit" value="Submit Form" name="submit">SUBMIT</button>
  </div>
  

  </form>
   
    
   
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
