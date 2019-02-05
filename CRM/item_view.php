<?php
include 'config/init.php';

 $supplier_email=isset($_GET['supplier_email']) ? $_GET['supplier_email'] : null;
 $template=new Template('templates/view_item.php');
 $supplier=new Supplier;

 $template->item_list=$supplier->getItemByEmail($supplier_email);
 $template->serial=1;
 echo $template;


 ?>
