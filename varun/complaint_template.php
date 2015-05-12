<?php
  require 'core.php';
  require 'connect.php';
  require 'onlyNumbers.html';

  if(!loggedin())
  {
    exit("Login to register your complaint");
  }

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

<!doctype html>
<html lang="en-US">
<head>
  <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Register Complaint</title>

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
     
    <span class="navbar-header page-scroll"><a class="navbar-brand page-scroll" href="http://localhost/varun/index_main.html">Student Support System IIPS DAVV </a></span> 
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Register Complaint</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
  <script type="text/javascript" src="js/switchery.min.js"></script>
</head>

<body>
  <div id="wrapper">
  
  <h1> </h1>
  
  <form action="complaint_template.php" method="POST">
  <div class="col-2">
    <label>
      Name
      <input type="text" required placeholder="What is your full name?" id="name" name="name" tabindex="1">
    </label>
  </div>
  <div class="col-2">
    <label>
      Roll Number
      <input type="text" required placeholder="Enter your Roll number like :'IT-2K12-XX'" id="company" 
      name="roll_no" tabindex="2">
    </label>
  </div>
  
  <div class="col-3">
    <label>
      Phone Number
      <input type="text" required placeholder="What is the best # to reach you?" id="phone" 
      name="phone_no" tabindex="3" onkeypress="return isNumericKey(event)">
    </label>
  </div>
  <div class="col-3">
    <label>
      Email
      <input type="email" required placeholder="What is your e-mail address?" id="email" 
      name="email" tabindex="4">
    </label>
  </div>
  <div class="col-3">
    
  <label>
      Complaint
      <input type="text" required placeholder="What is the type of your complaint?" id="complaint" 
      name="complaint" tabindex="5">
    </label>
    </div>
  <div class="col-4">
    <!--<label>
      Age of Complaint
      <input type="text" required placeholder="What is the type of your complaint?" id="age_of_complaint" 
      name="age_of_complaint" tabindex="6">
    </label>-->
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
    <button class="submitbtn" type="submit" value="submit" name="submit">SUBMIT</button>
  </div>
  </form>
  </div>
<script type="text/javascript">
var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {
  var switchery = new Switchery(html);
});
</script>
</body>
</html>