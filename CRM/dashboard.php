<?php
include 'config/init.php';
$user = new User;

if(isset($_POST['login'])){

    $email   =   isset($_POST['email']) ? $_POST['email'] : null;
    $pass    =   isset($_POST['pwd']) ? $_POST['pwd'] : null;
    if($email && $pass){
        $u = $user->getUser($email,$pass);
        //var_dump($u);
        $_SESSION['email'] = $u->email;
        $_SESSION['name'] = $u->fname . ' '.$u->lname;



        if(($u!=null) && ($u->type == 'admin')){
            $_SESSION['type'] = 'admin';

            redirect('admin_page.php','','');


        }
        else if(($u!=null) && ($u->type == 'customer')){
            $_SESSION['type'] = 'customer';
            redirect('customer_page.php','','');
            }
        else{

            redirect('index.php', 'Email or password is incorrect', 'error');
        }

    }else{
        redirect('index.php', 'Invalid Email or password', 'error');
    }
}
else if(isset($_POST['register'])){
        $data['fname'] = $_POST['fname'];
        $data['lname'] = $_POST['lname'];
        $data['address'] = '';
        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['pwd'];
        $data['contact'] = '';
        $data['suggestion'] = '';
        $data['type'] = 'customer';

        $res = $user->insert($data);

        if($res){

            $_SESSION['email'] = $data['email'];
            $_SESSION['name'] = $data['fname'] . ' '.$data['lname'];
            $_SESSION['type']='customer';

            echo "ok";
            //redirect('customer_page.php');
        }
        else{
            echo 'not_ok';
            //redirect('register.php', 'Email already exist', 'error');
        }



    // if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['pwd'])){
    //     $res = $user->insertUser($_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['pwd']);
    //     if($res){
    //         $_SESSION['email'] = $_POST['email'];
    //         $_SESSION['name'] = $_POST['fname'] . ' '.$_POST['lname'];
    //
    //         $template = new Template('templates/dashboard_customer.php');
    //
    //         $template->title = 'Dashboard';
    //         echo $template;
    //     }else{
    //         redirect('register.php', 'Something went wrong', 'error');
    //     }
    //
    // }


}else if(isset($_POST['note'])){
    $data = array();
    $data['title']= $_POST['note_name'];
    $data['detail']=$_POST['note_detail'];
    $product=new Product;
    $res = $product->addNotes($data['title'],$data['detail']);
    if($res)
    redirect('manage_note.php',"Notes have been added","success");
    else {
        redirect('manage_note.php',"Try again","error");
    }


}



else{
    redirect('index.php', '', '');
}



?>
