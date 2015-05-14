<div>
<?php
if (loggedin()){
?>	  |
<a href ='profile.php'><p>Profile</p></a>  |
<a href ='logout.php'><p>Log out</p></a>

<?php 
} else {

?>
 
<a href ='login.php'><p>Log in</p></a>
<a href ='register.php'><p>Register</p></a>
<?php
}

?>

</div>