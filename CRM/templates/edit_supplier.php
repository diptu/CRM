<?php include 'inc/header.php';?>
<?php include 'inc/nav.php';?>
 <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content" style="min-height:737px">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title">Supplier Detail Edit
            </h3>
            <!-- END PAGE TITLE-->
                        <div class="row">
                <div class="col-md-12">
                    <div class="portlet-body" style="height: auto;">
                        <form action="edit_supplier.php?supplier_id=<?=$supplier->id;?>" method="POST">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-body">

                                        <div class="form-group clearfix">
                                            <label class="col-md-3 control-label">Supplier Name</label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value="<?=$supplier->name;?>" name="supplier_name">
                                                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-md-3 control-label">Supplier Mobile</label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value="<?=$supplier->phone;?>" name="supplier_mobile">
                                                    <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-md-3 control-label">Supplier Email</label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value="<?=$supplier->email;?>"  name="supplier_email">
                                                    <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-md-3 control-label">Supplier Address</label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value="<?=$supplier->address;?>" name="supplier_address">
                                                    <span class="input-group-addon"><i class="fa fa-location-arrow" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group clearfix">
                                            <!-- <div class="col-md-12">
                                                <div class="description" style="width: 100%;border: 1px solid #ddd;padding: 10px;border-radius: 5px">
                                                    <label class="col-md-3 control-label">Item Name</label>
                                                    <div class="col-md-12" id="planDescriptionContainer">
                                                                                                                <div class="input-group">
                                                            <input type="hidden" name="item_id[]" value="5">
                                                            <input name="item[]" id="designaion_id" data_value="5" class="form-control margin-top-10" type="text" required="" value="Banana Updated">
                                                            <span class="input-group-btn">
                                                        </span>
                                                        </div>

                                                                                                            </div>
                                                    <div class="row">

                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>

                                        <div class="form-group clearfix">
                                            <div class="col-md-12">
                                                <button class="btn btn-info col-md-12" name="update_supplier" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>
                                                    Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'inc/footer.php';?>
