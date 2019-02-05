<?php include 'config/init.php';
if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){


$template = new Template('templates/dashboard.php');
$template->title = 'Dashboard';
$user = new User;
$warehouse = new Warehouse;
$supplier = new Supplier;
$template->data = $user->getTotalCustomerByYear();

$users = $user->getAllUser();
$user_count = count($users);
$template->user_count = $user_count;
$template->warehouse_count = count($warehouse->getAllWarehouse());
$template->supplier_count = count($supplier->getAllSuppliers());

$diff = 0;
if(isset($_COOKIE['count_user'])){
    $diff = $user_count - $_COOKIE['count_user'];
    if($diff !=0){
        setcookie ('count_user',$user_count , time()+3600, '/', NULL, 0 );
    }
}else{
    setcookie ('count_user',$user_count , time()+3600, '/', NULL, 0 );
}
$template->diff = $diff;
echo $template;
}
else{
    redirect('index.php' , '404 not found','error');
}
?>
