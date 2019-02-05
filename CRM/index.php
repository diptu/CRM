<?php
include 'config/init.php';
    if(isset($_SESSION['email']) && $_SESSION['email']!=null){


        if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){

            redirect('admin_page.php');

        }else if(isset($_SESSION['type']) && $_SESSION['type']=='customer'){
            redirect('customer_page.php');
        }
    }else{
        $template=new Template('templates/login.php');
        echo $template;
     }

 ?>
