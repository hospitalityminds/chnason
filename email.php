<?php
$to = 'info@bodhvalley.com';
$subject = 'Bodhvalley msg';
$message = 'Welcome to bodhvalley?'; 
$from = '';
 
// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>