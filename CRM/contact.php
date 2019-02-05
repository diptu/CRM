<?php   include 'config/init.php';
if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){

  $template=new Template('templates/contact.php');
  $user = new User;
  $template->users = $user->getAllUser();

  echo $template;
}
else{
    redirect('index.php' , '404 not found','error');
}
 ?>
