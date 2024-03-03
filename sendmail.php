<?php
$connect = new mysqli('localhost','root','root','portfolio_db');

//Gathering the content
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$msg   = $_POST['comments'];

$errors = [];

//This is validating content
$fname = trim($fname);
$lname = trim($lname);
$email = trim($email);
$msg = trim($msg);

if(empty($fname)) {
    $errors['first_name'] = 'First name cannot be empty';
}

if(empty($lname)) {
    $errors['last_name'] = 'Last name cannot be empty';
}

if(empty($msg)) {
    $errors['comments'] = 'Message cannot be empty';
}

if(empty($email)) {
    $errors['email'] = 'You must provide email';
}   else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'Email does not exist';
}

if(empty($errors)) {
    $query = "INSERT INTO contact (first_name,last_name,email,comments) VALUES('$fname','$lname','$email','$msg')";
}

   if(mysqli_query($connect, $query)) {
    $to = 'aidenwotton@gmail.com';
    $subject = 'Message from Portfolio';
    $message = "You have revieved a new contact form submission.\n\n";
    $message .= "Name: ".$fname." ".$lname."\n";
    $message .= "Email: ".$email."\n\n";

    mail($to,$subject,$message);
   }
?>