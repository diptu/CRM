<?php
  include 'config/init.php';
  if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){
      $warehouse = new Warehouse;
      $warehouse_id = isset($_GET['warehouse_id']) ? $_GET['warehouse_id'] : null;


         $template = new Template('templates/warehouse_detail.php');
         $template->serial = 1;
         $template->warehouse = $warehouse->getWarehouse($warehouse_id);
         $template->products = $warehouse->getWarehouseProducts($warehouse_id);
         echo $template;

         //echo $product_id;
  }else{
      redirect('index.php', '404 not found','error');
  }

 ?>
