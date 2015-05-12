<?php
   
   require 'connect.php';
	
   
           

	if( isset($_POST['id']) && isset($_POST['password']))
           {
		
                      $id =$_POST['id'];
                     $password =$_POST['password'];
		  
		       


              
                if (isset($_POST['login'])) //to insert data in a table 
				{
				     
		            if(!empty($id) && !empty($password))
               
                    {



                                
                        $query="SELECT * FROM `user_info` WHERE `id` = '$id' AND `password` = '$password'"; 

                      //$query = "INSERT INTO  `user_info` (  `user_id` ,  `user_name` ) VALUES ('$NAME',  '$DATE')"
				
        

                      
				
                         if($query_run = mysql_query($query))
                       
                          {
                            $query_num_rows =  mysql_num_rows($query_run);


                                            if($query_num_rows == 1)
                                               {


    

                                                      echo '<b><font color = "red" >Welcome </font></i>';
									  
								                        header("Location:myhome.php");  //write ur homepage her }
				
		                                			 else
                  									{ 
						                                   echo '<b>Invalid Username/password Combination</b>';
								                    }

                         }

    } else {echo "empty feild" }
				}
		
 }


 ?>


