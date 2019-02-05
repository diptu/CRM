<?php if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){?>

      <?php include 'inc/header.php'; ?>
      <?php include 'inc/nav.php'; ?>
      <div class="page-content-wrapper">
       <div class="page-content" style="min-height:531px">
                <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE TITLE-->
                <h3 class="page-title bold">Update Product
                    <small> </small>
                </h3>
                <!-- END PAGE TITLE-->

                <!-- BEGIN PAGE CONTENT-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet box grey-mint">
                            <div class="portlet-title">
                                <div class="caption">
                                Edit Profile
                                </div>
                                <div class="tools">
                                </div>
                            </div>

                            <div class="portlet-body form">

                                <!-- BEGIN FORM---------------------->
                                <form method="POST" action="edit_customer.php?customer_email=<?=$user->email;?>" class="form-horizontal form-bordered" enctype="multipart/form-data">

                                    <div class="form-body">


                                        <div class="form-group">
                                            <label class="col-md-2 control-label">First Name
                                            </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="fname"  value="<?=$user->fname;?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Last Name

                                            </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="lname"  value="<?=$user->lname;?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Detail

                                            </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="bio"  value="<?=$user->bio;?>">
                                            </div>
                                        </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Address



                                                </label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="address"  value="<?=$user->address;?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Email

                                                </label>
                                                <div class="col-md-6">
                                                    <?=$user->email;?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Phone number

                                                </label>
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="contact"  value="<?=$user->contact;?>">
                                                </div>
                                            </div>
                                        </div>




                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" name="update_user" class="btn btn-primary"> submit</button>

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
