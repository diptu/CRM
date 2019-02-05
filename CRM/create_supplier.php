<?php
include 'config/init.php';
if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){
    if(isset($_POST["create_supplier"])){
        $supplier=new Supplier;
        $data=array();
        $item = array();
        $data['name']=$_POST['supplier_name'];
        $data['phone']=$_POST['supplier_mobile'];
        $data['email']=$_POST['supplier_email'];
        $data['address']=$_POST['supplier_address'];
        $item=array();
        $item=$_POST['item'];

       $res=$supplier->insert($data);
       if($res){
        foreach ($item as  $value) {
            if($value!=""){
                $data['item']=$value;
                $sql=$supplier->insertItem($data);


            }


        }
        if($sql){
            redirect("supply.php","Successful","success");
        }
        else{
            redirect("supply.php","Information has not been recorded","error");
        }

    }
        else{
            redirect("dashboard.php","Information has not been recorded","error");
        }
        $res=$supplier->insert($data);
        if($res){
            redirect("supply.php","Sucessfully done","success");

        }
        else{
            redirect("dashboard.php","Information has not been recorded","error");
        }


    }
    else{
        redirect("dashboard.php","Information has not been recorded","error");
    }

}
else{
    redirect("index.php","Page not found",'error');

}


 ?>
