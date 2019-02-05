<?php  include 'config/init.php';
if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){

$product = new Product;
$template = new Template('templates/product_management.php');

$template->sub_title = 'Office Management';
$template->serial = 1;


if(isset($_POST['del_id'])){
    $del_id = $_POST['del_id'];
    if($product->delete($del_id)){
        redirect('product.php', 'Product Removed', 'success');
    }else{

        redirect('product.php', 'Product could not be removed this time!', 'error');
    }

}else if(isset($_POST['add_product'])){

    $category_name = $_POST['product_category'];
    $product_name = $_POST['product_name'];
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];
    $unit = $_POST['unit'];
    //echo $category_name;
     $categories = $product->getCategoryByName($category_name);

     if(isset($categories->id) && $categories->id != null){
        $res =  $product->addNewProduct($product_name,$unit,$buying_price,$selling_price,$categories->id);
        if($res) redirect('product.php','Item inserted','success');
        else redirect('product.php','Item could not be inserted this time','error');
     }
     else{

        $res = $product->addNewCategory($category_name);
        if($res){

            $categories = $product->getCategoryByName($category_name);

            if(isset($categories->id) && $categories->id != null){
               $res =  $product->addNewProduct($product_name,$unit,$buying_price,$selling_price,$categories->id);
               if($res) redirect('product.php','Item inserted','success');
               else redirect('product.php','Item could not be inserted this time','error');
            }
            //var_dump($product);
        }else{
            redirect('product.php','Item could not be inserted this time','error');
            //$res = $product->addNewProduct($category_name);
        }


    }



    // if($product->delete($del_id)){
    //     redirect('product.php', 'Product Removed', 'success');
    // }else{
    //
    //     redirect('product.php', 'Something went wrong!', 'error');
    // }

}else{

$category_id   =   isset($_GET['category']) ? $_GET['category'] : null;

if($category_id){

    $template->products =   $product->getCategoryById($category_id);
    $template->title    =   'Product List in '.$product->getCategory($category_id)->name;
}else{
    $template->title = 'Product List';
    $template->products = $product->getAllProducts();
}

$template->categories   =   $product->getCategories();
echo $template;
}


}else{
    redirect('index.php' , '404 not found','error');
}
?>
