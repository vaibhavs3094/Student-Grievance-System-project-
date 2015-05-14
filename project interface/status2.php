<?php
include 'connect.php';
include 'core.php';
$sqlget="SELECT * FROM `complaint_registration`";
$sqldata=mysql_query($sqlget) or die("error");
while ($row = mysql_fetch_array($sqldata))
{
	//echo $row['status'];
	echo "<script>alert('$row[status]')</script>";
	echo "<script>alert('invalid roll number or password')</script>";
}
?>