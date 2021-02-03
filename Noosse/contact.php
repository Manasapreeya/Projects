<?php
//variable setting
$name = $_REQUEST['Name'];
$mail = $_REQUEST['Email'];
$message = $_REQUEST['Message'];

//check input fields
if (empty($name) || empty($mail) || empty($message)) 
{
	echo "Please fill all the fields";
}
else
{
	mail("manasapreeya01@gmail.com" , "Noosse enquiry" , $message , "From: $name <$mail>");
	echo "<script type = 'text/javascript'> alert('your message has been sent successfully')
	window.history.log(-1);
	</script>"
}
?>