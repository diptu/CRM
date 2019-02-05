<?php
include 'config/init.php';

$template = new Template('templates/dashboard_customer.php');

$template->title = 'Dashboard';
echo $template;
