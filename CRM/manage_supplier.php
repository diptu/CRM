<?php include 'config/init.php';
if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){
  $template=new Template('templates/manage.php');

  $template->title="Supply Management";

  echo $template;
}
  else{
      redirect('index.php' , '404 not found','error');
  }
 ?>
