<?php   include 'config/init.php';
if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){
    $user = new User;
    if(isset($_POST['update'])){
        $data['fname'] = $_POST['fname'];
        $data['lname'] = $_POST['lname'];
        $data['address'] = $_POST['address'];
        $data['contact'] = $_POST['mobile'];
        $data['email'] = $_SESSION['email'];

        //var_dump($data);

         $res = $user->updateAdmin($data);

        if($res)  redirect('general_management.php' , 'Information updated' , 'success');
        else      redirect('general_management.php' , 'Something went wrong' , 'error');

    }

  $template=new Template('templates/general_management.php');

  $template->admin = $user->getInfo();
  echo $template;
}
  else{
      redirect('index.php' , '404 not found','error');
  }
 ?>
