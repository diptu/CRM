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
                                    <i class="fa fa-cogs"></i>Edit Settings
                                </div>
                                <div class="tools">
                                </div>
                            </div>

                            <div class="portlet-body form">

                                <!-- BEGIN FORM---------------------->
                                <form method="POST" action="edit.php?product_id=<?=$product->id;?>" class="form-horizontal form-bordered" enctype="multipart/form-data">

                                    <div class="form-body">


                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Product Name <span class="required">
                                            </span>
                                            </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="product_name"  value="<?=$product->name;?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Product Category <span class="required">
                                                 </span>
                                            </label>
                                            <div class="col-md-6">
                                                <select name="product_category" class="form-control">
                                                    <option value="<?=$product->category_id;?>"><?=$product->cname;?></option>
                                                    <?php foreach ($categories as $category): ?>
                                                        <?php if($category->id != $product->category_id){?>
                                                                <option value="<?=$category->id;?>"><?=$category->name;?></option>

                                                    <?php  }
                                                    endforeach; ?>
                                                </select><br>
                                                </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Unit <span class="required">
                                                 </span>
                                            </label>
                                            <div class="col-md-6">
                                                <select name="product_unit" class="form-control">

                                                        <option value="<?=$product->unit;?>"><?=$product->unit;?>
                                                        <option value="Kg">Kg</option>
                                                        <option value="Feet">Feet</option>
                                                        <option value="Pieces">Pieces</option>
                                                        <option value="Liter">Liter</option>
                                                        <option value="Pound">Pound</option>
                                                    </select><br>
                                                </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Buying Price</label>

                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="buying_price"  value="<?=$product->buying_price;?>">
                                            </div>
                                        </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Selling Price</label>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="selling_price"  value="<?=$product->selling_price;?>">
                                        </div>
                                    </div>

                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" name="update_product" class="btn btn-primary"><i class="fa fa-check"></i> submit</button>

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
