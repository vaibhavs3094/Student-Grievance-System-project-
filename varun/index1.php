<?php
require 'core.php';
require 'connect.php';
if(loggedin())
{
	echo "'you are logged in'.<a href='logout.php'>Log out</a>";
}
else
{
	include 'new_login.php';
}
?>