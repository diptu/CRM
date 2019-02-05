<?php if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){?>

      <?php include 'inc/header.php'; ?>
      <?php include 'inc/nav.php'; ?>
      <div class="page-content-wrapper">
       <div class="page-content" style="min-height:531px">
                <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE TITLE-->
                <h3 class="page-title bold">Update Warehouse
                    <small> </small>
                </h3>
                <!-- END PAGE TITLE-->

                <!-- BEGIN PAGE CONTENT-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet box grey-mint">
                            <div class="portlet-title">
                                <div class="caption">
                                    Edit
                                </div>
                                <div class="tools">
                                </div>
                            </div>

                            <div class="portlet-body form">

                                <!-- BEGIN FORM---------------------->
                                <form method="POST" action="edit_warehouse.php?warehouse_id=<?=$warehouse->id;?>" class="form-horizontal form-bordered" enctype="multipart/form-data">

                                    <div class="form-body">

                                    <div class="form-group">
                                            <label class="col-md-2 control-label">Warehouse Name</label>

                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="warehouse_name"  value="<?=$warehouse->name;?>">
                                            </div>
                                        </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Location</label>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="warehouse_location"  value="<?=$warehouse->address;?>">
                                        </div>
                                    </div>

                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button align="center" type="submit" name="update_warehouse" class="btn btn-primary">submit</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET-->
                    </div>
                </div>
                <!-- END PAGE CONTENT-->
            </div>
      <?php include 'inc/footer.php'; ?>

         //echo $product_id;
 <?php }else{
      redirect('index.php', '404 not found','error');
  }

 ?>
