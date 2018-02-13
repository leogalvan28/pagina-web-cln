<?php
// Check for empty fields
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


// Replace you email with the example bellow.
$to = 'leonelgalvanlobato@gmail.com'; 

// captcha
/*
$response_recaptcha = $POST["g-recaptcha-response"];
  if(isset($response_recaptcha)&& $response_recaptcha){
        $secret = "6LccKDAUAAAAADg07x0Gm9eZZ4zuGAahVC_8euo7";
        $ip = $SERVER['REMOTE_ADDR'];
        $validation_server = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=Ssecret&response=$response_recaptcha&remoteip=$ip");

        var_dump($validation_server);


 // captcha
	*/
// Create the email and send the message


// ----------- ^ ------------

$email_subject = "Cotizacion paginas web culiacan:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\n\nMessage:\n$message";
$headers = "From: contacto@paginaswebculiacan.net\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>

