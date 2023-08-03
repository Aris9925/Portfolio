<?php

  if(!isset($_POST['submit']))
  {
    echo"Error; you need to submit the form!";
  }

  $name = $_POST['name'];
  $visito_mail = $_POST['email'];
  $message = $_POST['message'];

  if(empty($name)||empty($visitor_email))
  {
    echo "Name or email are empty";
    exit;
  }

  $email_from='sppapadatos@outlook.com';
  $email_subject= "New form submission";
  $email_body = "You have received a new message from the user $name.\n".
                "email address: $visitor_email\n".
                "Here is the message:\n $message".
  $to = "sppapadatos@outlook.com";
  $headers = "From: $email_from \r\n";

  mail($to, $email_subject,$email_body,$headers);
?>
