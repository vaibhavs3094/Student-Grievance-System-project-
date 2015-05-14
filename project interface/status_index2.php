<?php
include 'connect.php';
include 'core.php';
if(isset($_POST['reference_no']))
{
  //echo "asd";
  $reference_no=$_POST['reference_no'];
  if(!empty($reference_no))
  {
      //echo 'success'; 


       $sql="SELECT status FROM `complaint_registration` WHERE `reference_no`='$reference_no'";
      //$query=mysql_query($sql);


     
    if($result=mysql_query($sql))
     {
        while ($row=mysql_fetch_array($result))
        {
          printf ("status of your complaint is : %s\n",$row["status"]);

          //echo "<script>alert(".$row['status'].")</script>";
        }
        //echo "wrong reference number";
        //echo "<script>alert('Please enter correct reference number')</script>";
        // Free result set
         // mysqli_free_result($result);

    }
       // echo "<script>alert('Please enter correct reference number')</script>";

      
  
  }
}

?>