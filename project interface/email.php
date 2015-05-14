<? php
$to='varunwadhwani1811@gmail.com';
$subject='this is an email';
$body='this is a test mail';
$headers='from:varun<varunwadhwani324@gmail.com>';
if(mail ($to,$subject,$body,$headers))
{
	echo "'email has been sent to '.$to";
}
else
{
	echo 'there has been error sending the mail';
}
?>