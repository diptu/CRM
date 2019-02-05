<?php
  include 'config/init.php';
  if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){
      $warehouse = new Warehouse;

      $warehouse_id=isset($_GET['warehouse_id']) ? $_GET['warehouse_id'] : null;

        if(isset($_POST['update_warehouse'])){

            $data = array();
            $data['name'] = $_POST['warehouse_name'];
            $data['address'] = $_POST['warehouse_location'];


            if($warehouse->update($warehouse_id,$data)){
                redirect('warehouse.php' , 'Warehouse information has been updated','success');
            }else{
                redirect('warehouse.php' , 'something went wrong','error');
            }

        }

         $template = new Template('templates/warehouse_edit.php');
         $template->warehouse = $warehouse->getWarehouse($warehouse_id);

         echo $template;

         //echo $product_id;
  }else{
      redirect('index.php', '404 not found','error');
  }

 ?>
