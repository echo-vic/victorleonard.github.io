<?php
$errors = [];

if(!array_key_exists('name',$_POST) || $_POST['name'] == '') {
    $errors['name'] = "Veuillez saisir un nom";    
}
if(!array_key_exists('email',$_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Veuillez saisir un email valide";    
}
if(!array_key_exists('message',$_POST) || $_POST['message'] == '') {
    $errors['message'] = "Veuillez saisir un message";    
}
session_start();
if(!empty($errors)){
    
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('location:index.php#contact-form');
}
else {
    $_SESSION['success'] = 1;
    $nom = $_POST['name'];
    $to = 'victorleonard@hotmail.fr';
    $subject = $nom.' vous envoi un message depuis victorleonard.fr';
    $message = $_POST['message'];
    $email = $_POST['email'];
    
    $headers = 'From:'.$email."\r\n";
    $headers.='MIME-version: 1.0'."\r\n";
    $headers.='Content-type: text/html; charset=utf-8'."\r\n";
    mail($to,$subject,$message,$headers);
    
    
    //$contenu = $_POST['message'];
    //$email = $_POST['email'];
    //$message =  "Vous avez reçu un message de $nom ($email) : $contenu ";
    //$message = $_POST['message'];
    //var_dump($message);die();
    //$headers = "FROM: victorleonard.fr";
    //mail('victorleonard@hotmail.fr','Formulaire de contact', $message, $headers);
    header('location:index.php#contact-form');
}