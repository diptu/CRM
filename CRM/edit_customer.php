<?php
  include 'config/init.php';
  if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){
      $user = new User;

      $user_email=isset($_GET['customer_email']) ? $_GET['customer_email'] : null;

        if(isset($_POST['update_user'])){

            $data = array();
            $data['fname'] = $_POST['fname'];
            $data['lname'] = $_POST['lname'];
            $data['contact'] = $_POST['contact'];
            $data['bio'] = $_POST['bio'];
            $data['email'] = $user_email;
            $data['address'] = $_POST['address'];

            // echo $user_email;
            // var_dump($data);
            if($user->update($data)){
                redirect('customer.php' , ' Information has been updated','success');
            }else{
                redirect('customer.php' , 'error!','error');
            }

        }

         $template = new Template('templates/customer_edit.php');
         $template->user = $user->getUserByemail($user_email);

         echo $template;

         //echo $product_id;
  }else{
      redirect('index.php', '404 not found','error');
  }

 ?>
