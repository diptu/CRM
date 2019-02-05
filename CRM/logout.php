<?php
include 'config/init.php';
    $_SESSION['name'] = null;
    $_SESSION['email'] = null;
    $_SESSION['type'] = null;
    redirect('index.php','You have been logged out!','success');
?>
