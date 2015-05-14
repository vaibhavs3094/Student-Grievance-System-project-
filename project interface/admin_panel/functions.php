<?php
	session_start();
	function loggedin(){
		if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
			return true;
		}
		else {
			return false;
		}
	}
	if(loggedin()){
		$my_id = $_SESSION['user_id'];
		$user_query = mysql_query("SELECT username,user_level FROM users WHERE id=$my_id");
		$run_user = mysql_fetch_assoc($user_query);
		$username = $run_user['username'];
		$user_level =$run_user['user_level'];
		if($query_level = mysql_query("SELECT name FROM user_level WHERE  id=$user_level")){
			$run_level = mysql_fetch_assoc($query_level);
			$level_name = $run_level['name'];	
		}else{
			echo "failed";
		}
		




	}

?>