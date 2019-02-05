<?php   include 'config/init.php';
if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){


  $user = new User;
  if(isset($_POST['add_customer'])){
      $data['fname'] = $_POST['fname'];
      $data['lname'] = $_POST['lname'];
      $data['address'] = $_POST['address'];
      $data['email'] = $_POST['email'];
      $data['password'] = $_POST['password'];
      $data['contact'] = $_POST['phone'];
      $data['suggestion'] = $_POST['include_word'];
      $data['type'] = 'customer';
      //var_dump($data);

       $res = $user->insert($data);

      if($res)  redirect('customer.php' , 'New customer information has been added' , 'success');
      else      redirect('customer.php' , 'Email already exist' , 'error');
  }
  else{
      redirect('customer.php','could not be inserted this time','error');
  }
}
  else{
      redirect('index.php' , '404 not found','error');
  }
  ?>
