<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'info@dtb.amsterdam'; // ****PUT YOUR EMAIL ADDRESS HERE****
$email_subject = "Website Contact Form:  $name";
$email_body = "U heeft een nieuw bericht ontvangen.\n\n"."Hier zijn de details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: info@dtb.amsterdam\n"; // ****ENTER WHO YOU WANT THE MESSAGE TO BE FROM HERE****
$headers .= "Reply-To: $info@dtb.amsterdam";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>