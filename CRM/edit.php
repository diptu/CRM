<?php
  include 'config/init.php';
  if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){
      $product = new Product;
      $product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;


        if(isset($_POST['update_product'])){

            $data = array();
            $data['name'] = $_POST['product_name'];
            $data['unit'] = $_POST['product_unit'];
            $data['category_id'] = $_POST['product_category'];
            $data['buying_price'] = $_POST['buying_price'];
            $data['selling_price'] = $_POST['selling_price'];

            if($product->update($product_id,$data)){
                redirect('product.php' , 'Product has been updated','success');
             }
             else{
                redirect('product.php' , 'something went wrong','error');
            }

        }

         $template = new Template('templates/product_edit.php');
         $template->product = $product->getProduct($product_id);
         $template->categories = $product->getCategories();
         echo $template;

         //echo $product_id;
  }else{
      redirect('index.php', '404 not found','error');
  }

 ?>
