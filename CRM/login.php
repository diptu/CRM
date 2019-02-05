
<?php
include 'config/init.php';
    if(!$_POST['uname']){
        redirect('index.php','Enter User name','error');
    }
?>
