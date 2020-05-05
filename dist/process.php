<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "amin@aminph.co";
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    //send email
    mail($admin_email, $subject, $name. 'wrote:' . $message . ' - ' . $phone, "From:" . $email);
    
    header('Location: https://aminph.co/success.html');
  }