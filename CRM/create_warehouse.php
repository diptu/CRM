<?php    include 'config/init.php';
if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){


  $warehouse = new Warehouse;
  if(isset($_POST['save_warehouse'])){
      $data['name'] = $_POST['warehouse_name'];
      $data['address'] = $_POST['warehouse_location'];

      echo 'here';
      $res = $warehouse->insert($data);
      if($res)  redirect('warehouse.php' , 'New Store House has been added' , 'success');
      else      redirect('warehouse.php' , 'Something went wrong' , 'error');
  }
  else if(isset($_POST['store_to_stock'])){
      $data['warehouse_id'] = $_POST['warehouse_id'];
      $data['product_id'] = $_POST['product_id'];
      $data['quantity']   = $_POST['quantity'];
      $res = $warehouse->insertToStock($data);
      if($res)  redirect('warehouse.php' , 'Stock has been added' , 'success');
      else      redirect('warehouse.php' , 'Something went wrong' , 'error');
  }
}
else{
    redirect('index.php' , '404 not found','error');
}
 ?>
