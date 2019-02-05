<?php include 'config/init.php';
//if(isset($_SESSION['type']) && $_SESSION['type']=='customer'){
$template = new Template('templates/dashboard_customer.php');
$template->title = 'Dashboard';
echo $template;
// }
// else{
//     redirect('index.php' , '404 not found','error');
// }

?>
