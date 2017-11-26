<?php
session_start();
if(isset($_POST['name'])&& isset($_POST['email'])&& isset($_POST['message'])&& isset($_POST['subject'])){
include 'popo.php';
$valid = new Validation();

$name = $valid->cleanInputs($valid->stripSqlKeyWords($_POST['name']));
$email = $valid->cleanInputs($valid->stripSqlKeyWords($_POST['email']));
//$phone = $valid->cleanInputs($valid->stripSqlKeyWords($_POST['phone']));
$subject = $valid->cleanInputs($valid->stripSqlKeyWords($_POST['subject']));
$message = $valid->cleanInputs($valid->stripSqlKeyWords($_POST['message']));
$_SESSION['nm'] = $name;
date_default_timezone_set('Africa/Nairobi');
$time = date("F j, Y, g:i a");
$headers = 'From:' .$email. "\r\n" .
									    'X-Mailer: PHP/' . phpversion();
										$message = 'The following is an enquiry received on '.$time.':'."\n\n".'NAME:  '.$name.'  '."\n".'EMAIL: '.$email.' '."\n".'SUBJECT: '.$subject.' '."\n".'MESSAGE: '.$message.' '."\n".' ';

										// In case any of our lines are larger than 70 characters, we should use wordwrap()
										$message = wordwrap($message, 70);
										// Send
										mail('sales@impactchemicals.co.ke', 'Website Enquiry Received', $message, $headers);
										header("Location: contacts.html") ;
}else{
header("Location: contact.html") ;
}
?>
