<?php
if(!isset($_POST["submit"]))
{
    echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email))
{
    echo "Name and Email are mandatory!";
}

$email_from = 'ds&p@website.com';
$email_subject = "New Contact Form Submission";
$email_body = "You have receieved a new contact form from the website DEVON SIGNS & PROPS from $name.\n".
                        "email address: $visitor_email\n".
                        "With the message: \n $message".

$to = "lee-wilson@outlook.com";
$headers = "from: $email_from \r \n";

//Send the email
mail($to, $email_subject,$email_body,$headers);

?>
