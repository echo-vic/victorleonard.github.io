<?php

	if(!empty($_POST) && !empty($_POST['nom']) && !empty($_POST['email']) &&
   filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) && !empty($_POST['message']))
{
  extract($_POST);
  $nom = strip_tags($nom);
  $email = strip_tags($email);
  $message = strip_tags($message);

	$to = 'victorleonard@hotmail.fr';
  $subject = $nom.' vous envoi un message';
  $message = nl2br($message);

	$headers = 'From:'.$email."\r\n";
  $headers.='MIME-version: 1.0'."\r\n";
  $headers.='Content-type: text/html; charset=utf-8'."\r\n";
  mail($to,$subject,$message,$headers);
  
  header('Location: index.php');

	}

	else
{
  extract($_POST);
  if(empty($nom)) {echo 'Indiquez votre nom<br />';}
  if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)) {echo 'Indiquez un email valide<br />';}
  if(empty($message)) {echo 'Indiquez votre message<br />';}
  
}

	

	

?>

