<?php
$name = $_POST['name']; //'name' has to be the same as the name value on the form input element
$email = 'celdjl@gmail.com';
$message = 'celdjl@gmail.com';
$from = 'celdjl@gmail.com';
$to = 'celdjl@gmail.com'; //set to the default email address
$subject = 'celdjl@gmail.com';
$body = "DE parte de tal";

$headers = "From: $email" . "\r\n" .
"Reply-To: $email" . "\r\n" .
"X-Mailer: PHP/" . phpversion();

if(isset($_POST['submit']) {               
mail ($to, $subject, $body, $headers);  //mail sends it to the SMTP server side which sends the email
    echo "<p>Your message has been sent!</p>";
} 

else { 
    echo "<p>Something went wrong, go back and try again!</p>"; 
} 
if (!isset($_POST['submit'])  {
echo "<p>You answered the anti-spam question incorrectly!</p>";
}
?>