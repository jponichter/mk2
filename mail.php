<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$form = $_POST['form'];

header('Content-Type: application/json');
$secretKey = '6Ld3c8EUAAAAAPmDEGHtZohSV4RdE_T7uu9WpTle';
$responseKey = $_POST['g-recaptcha-response'];
$userIP = $_SERVER['REMOTE_ADDR'];

$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
$response = file_get_contents($url);
$response = json_decode($response);
if($response->success){
  
}else{
  print json_encode(array('message' => 'You are not human', 'code' => 0));
  exit();
}


if(!isset($form)){
    print json_encode(array('message' => 'Checkbox must be checked', 'code' => 0));
  exit();
}
if ($name === ''){
  print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
  exit();
}
if ($email === ''){
  print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
  exit();
} else {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
  exit();
  }
}
if ($subject === ''){
  print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
  exit();
}
if ($message === ''){
  print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
  exit();
}
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "ponichterjot@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
print json_encode(array('message' => 'Email successfully sent!', 'code' => 1));
exit();
?>