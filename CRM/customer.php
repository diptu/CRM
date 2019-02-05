<?php include 'config/init.php';
if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){
$user = new User;
$template = new Template('templates/customer_management.php');
$template->title = 'Customer';
$template->sub_title = 'Customer-managment';
$template->serial = 1;
$users = $user->getAllUser();
$template->users = $users;

if(isset($_POST['del_user'])){
    $del_email = $_POST['del_user'];
    if($user->delete($del_email)){
        $_COOKIE['count_user'] = $_COOKIE['count_user'] -1 ;
        redirect('customer.php', 'Information has been Removed', 'success');
    }else{

        redirect('customer.php', 'Information has not been deleted this time', 'error');
    }
}

echo $template;
}
else{
    redirect('index.php' , '404 not found','error');
}
?>
