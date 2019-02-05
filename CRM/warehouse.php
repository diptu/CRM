<?php include 'config/init.php';
if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){

    $warehouse = new Warehouse;
    $product = new Product;
    $template = new Template('templates/stock_management.php');
    $template->title = 'Stock Product List';
    $template->sub_title = 'Office-managment';
    $template->serial = 1;


    if(isset($_POST['del_id'])){
        $del_id = $_POST['del_id'];
        if($warehouse->delete($del_id)){
            redirect('warehouse.php', 'Warehouse Removed', 'success');
        }else{

            redirect('warehouse.php', 'Something went wrong!', 'error');
        }
    }
    $template->warehouses= $warehouse->getAllWarehouse();
    $template->products= $product->getAllProducts();
    echo $template;

}else{
    redirect('index.php' , '404 not found','error');
}

?>
