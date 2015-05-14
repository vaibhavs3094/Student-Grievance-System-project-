<?php
  require 'core.php';
  require'connect.php';

  if(!loggedin())
  {
    exit("Login to register your complaint");
  }
  
  if(isset($_POST['submit'])&&isset($_POST['name']) && isset($_POST['roll_no']) && isset($_POST['phone_no']) && 
    isset($_POST['email']) && isset($_POST['complaint']) && isset($_POST['age_of_complaint']))
  {
    
    echo "All set";
    $name=mysql_real_escape_string($_POST['name']);
    $roll_no=mysql_real_escape_string($_POST['roll_no']);
    $phone_no=mysql_real_escape_string($_POST['phone_no']);
    $email=mysql_real_escape_string($_POST['email']);
    $complaint=mysql_real_escape_string($_POST['complaint']);
    $age_of_complaint=mysql_real_escape_string($_POST['age_of_complaint']);

    if(!empty($name) && !empty($roll_no) && !empty($phone_no) && !empty($email) && !empty($complaint) && !empty($age_of_complaint))
    {
      $reference_no=rand(100,2003322);
      //echo "'your reference number is'.$reference_no.'.Refer it for future.'";
     $query="INSERT INTO `complaint_registration` VALUES(' ','$name','$roll_no','$phone_no','$email','$complaint','$age_of_complaint','$reference_no')";
          
      if($query_run=mysql_query($query))                                                              
      {
        $roll_no=mysql_result($query_run,0);//check if 2nd arg is a no. .In ex. 0 is given but i think its a row no.
        $_SESSION['roll_no']=$roll_no;
        echo "<script>alert('your reference number is ".$reference_no." Refer it for future.');</script>";
       //header('Location:new_complaintform.php');
        echo 'success';                                               
      }
      else
      {
         echo "Sorry we could not register your complaint.";
         header('Location:new_complaintform.php');
        
      }
    }
    else
    {
      echo 'Fill all the mandatory fields'; 
    }

  } 
  

?>

<b>Complaint Registration</b><br><br><br>
<form action="new_complaintform.php" method="POST">
  Name <br><input type="text" name="name" required> <br><br>
  Roll Number <br><input type="text" name="roll_no" required> <br><br>
  Phone Number <br><input type="text" name="phone_no" required> <br><br>
  E-mail <br><input type="email" name="email" required> <br><br>
  <label>
        Complaints
        <select name="complaint">
          <option> Ragging</option>
          <option> Sexual Harrasmant </option>
          <option>Administration</option>
          <option> Insfrastructure</option>
        </select>
      </label><br><br>
   <label>
        Age of Complaint
         <select name="age_of_complaint">
          <option> Recent</option>
          <option> Old </option>
           <option> Very Old</option>
        </select>
      </label><br><br>

  <input type="submit" value="Submit Form" name="submit">
</form>











