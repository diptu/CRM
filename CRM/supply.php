<?php
  include 'config/init.php';
  if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){
  $template=new Template('templates/supply_management.php');
  $template->title="Supplier Management";
  $product=new Product;
  $supplier =new Supplier;
  if(isset($_POST['del_supplier'])){
      $email=$_POST['del_supplier'];
     $res=$supplier->Delete($email);

     if($res){
        $sql=$supplier->DeleteItem($email);
        if($sql){

         redirect("supply.php","Information has Successfully deleted","success");
     }

     }
     else{
         redirect("supply.php","Something went wrong","error");
     }
  }
  //$template->products = $product->getAllProducts();
  //var_dump($supplier->getAllSuppliers());
   $template->suppliers = $supplier->getAllSuppliers();
   $template->serial=1;
   echo $template;
}else{
    redirect('index.php' , '404 not found','error');
}

 ?>
