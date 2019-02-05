<?php
include 'config/init.php';


$template = new Template('templates/customer_profile.php');
$template->title = 'Dashboard';
$email= $_SESSION['email'];
$user = new User ;
$template->user= $user->getUserByemail($email);
echo $template;

//echo var_dump($user);

?>
