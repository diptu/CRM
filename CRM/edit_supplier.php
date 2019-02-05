<?php
  include 'config/init.php';
  if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){
      $supplier = new Supplier;

      $supplier_id=isset($_GET['supplier_id']) ? $_GET['supplier_id'] : null;
      //var_dump($supplier->getSupplier($supplier_id));
      //echo $supplier_id;
        if(isset($_POST['update_supplier'])){

            $data = array();
            $data['name'] = $_POST['supplier_name'];
            $data['address'] = $_POST['supplier_address'];
            $data['email'] = $_POST['supplier_email'];
            $data['phone'] = $_POST['supplier_mobile'];


            if($supplier->update($supplier_id,$data)){
                redirect('supply.php' , 'supplier information has been updated','success');
            }else{
                redirect('supply.php' , 'something went wrong','error');
            }

        }

         $template = new Template('templates/edit_supplier.php');
         $template->supplier = $supplier->getSupplier($supplier_id);
         //var_dump( $supplier->getSupplier($supplier_id));
        echo $template;

         //echo $product_id;
  }else{
      redirect('index.php', '404 not found','error');
  }

 ?>
