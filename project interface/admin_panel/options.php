<?php
include 'connect.php';
include 'functions.php';


$u_id = $_GET['u_id'];
$u_type = $_GET['type'];
if($u_type == 'a'){

	mysql_query("UPDATE `users` SET `type` ='d' WHERE `id` ='$u_id' ");
	header('location:admin.php?type=user');


}
else if($u_type == 'd'){
	mysql_query("UPDATE `users` SET `type`='a' WHERE `id`='$u_id' ");
	header('location:admin.php?type=user');

}
?>