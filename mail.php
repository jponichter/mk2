<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

header('Content-Type: application/json');

if(!isset($_POST['form'])){
    print json_encode(array('message' => 'Checkbox musi być zaznaczony!', 'code' => 0));
  exit();
}
if ($name === ''){
  print json_encode(array('message' => 'Imię i nazwisko nie może być puste!', 'code' => 0));
  exit();
}
if ($email === ''){
  print json_encode(array('message' => 'Email nie może być pusty!', 'code' => 0));
  exit();
} else {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  print json_encode(array('message' => 'Email nieprawidłowy!', 'code' => 0));
  exit();
  }
}
if ($subject === ''){
  print json_encode(array('message' => 'Temat nie może być pusty!', 'code' => 0));
  exit();
}
if ($message === ''){
  print json_encode(array('message' => 'Wiadomość nie może być pusta!', 'code' => 0));
  exit();
}
if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
  {
        $secret = '6Ld3c8EUAAAAAPmDEGHtZohSV4RdE_T7uu9WpTle';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success)
        {
            
        }
        else
        {
          print json_encode(array('message' => 'Weryfikacja nie przebiegła pomyślnie, spróbuj ponownie!', 'code' => 0));
          exit();
        }
   }else{
    print json_encode(array('message' => 'Nie można przeprowadzić weryfikacji, spróbuj ponownie!', 'code' => 0));
    exit();
   }
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "biuro@mk2.com";
$mailheader = "From: jp_admin@mk2.info.pl \r\n";
mail($recipient, $subject, $content, $mailheader, "-f jp_admin@mk2.info.pl") or die("Error!");
print json_encode(array('message' => 'Email pomyślnie wysłano!', 'code' => 1));
exit();
?>