<?php

	if(isset($_POST['username'])&&isset($_POST['submit'])){
		echo "Set";
	}
	else{
		echo "Not set";
	}
?>
<form action="xy.php" method="POST">
	<input type="text" name="username">
	<input type="submit" name="submit">
</form>