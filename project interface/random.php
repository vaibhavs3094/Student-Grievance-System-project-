<?php
$ran=rand(101,5000000);
?>

<!DOCTYPE html>
<html>
<head>
	<title>reference number</title>
</head>
<body>
<font color='blue' size='5px'>your reference number is <b><?php echo $ran; ?></b>.Refer it for future</font>;

</body>
</html>


<!--<?php 
require 'connect.php';
if (isset($_POST["submit"]))
{
	echo 'your reference number is'.rand(101,5000000).'.Refer it for future';
}

?>
<form action="random.php" method="POST">
<input type="submit" name="submit" value="click here to submit">
</form>-->