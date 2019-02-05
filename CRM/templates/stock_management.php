
<?php
include 'inc/header.php';
include 'inc/nav.php';
?>


<div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content" style="min-height:850px">
            <?php displayMessage();?>
            <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title bold"><?=$title;?>
                <small> <?=$sub_title;?> </small>
                <a class="btn blue-ebonyclay pull-right" data-toggle="modal" href="#basic">
                    Add Product To Stock  <i class="fa fa-plus"></i>
                </a>

                <a class="btn blue-ebonyclay" data-toggle="modal" href="#warehouse">
                    Create Warehouse
                    <i class="fa fa-plus"></i>
                </a>
            </h3>
            <hr>
            <!-- END PAGE TITLE-->
                        <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-6">

                    <div class="portlet box blue-chambray">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-briefcase"></i>Product Stock In Warehouse
                            </div>
                            <div class="tools">
                            </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> Serial </th>
                                    <th> Warehouse Name </th>
                                    <th>Location</th>
                                    <th style="text-align: center"> Action </th>
                                </tr>
                                </thead>
                                <?php foreach ($warehouses as  $warehouse): ?>
                                    <tbody>
                                                                        <tr id="table_tr_">
                                            <td><?=$serial++;?></td>
                                            <td><?=$warehouse->name;?></td>
                                            <td><b><?=$warehouse->address;?></b></td>

                                            <td>

                                                <a type="button" class="btn btn-info" href="warehouse_detail.php?warehouse_id=<?=$warehouse->id;?>"><i class="fa fa-eye"></i>View Item</a>

                                            </td>
                                        </tr>

                                    </tbody>
                                <?php endforeach; ?>

                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>


                <div class="col-md-6">

                    <div class="portlet box blue-chambray">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-briefcase"></i>Warehouse List
                            </div>
                            <div class="tools">
                            </div>
                        </div>
                        <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> Serial </th>
                                    <th> Warehouse Name </th>
                                    <th> Location </th>
                                    <th style="text-align: center"> Action </th>
                                </tr>
                                </thead>
                                <?php $serial = 1 ;?>
                                <?php foreach ($warehouses as  $warehouse): ?>
                                    <tbody>
                                                                        <tr id="table_tr_">
                                            <td><?=$serial++;?></td>
                                            <td><?=$warehouse->name;?></td>
                                            <td><b><?=$warehouse->address;?></b></td>

                                            <td>
                                                <form method="post" action="warehouse.php"   onSubmit="return confirm('Are you sure you want to delete this?')">
                                                    <a class="btn blue-chambray" data-toggle="modal" href="edit_warehouse.php?warehouse_id=<?=$warehouse->id;?>"><i class="fa fa-edit"></i>Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;

                                                        <input type="hidden"    name="del_id" value="<?=$warehouse->id;?>">
                                                    <input type="submit"  class="btn red" id="delete" value="Delete">
                                            </form>

                                            </td>
                                        </tr>

                                    </tbody>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>


                        <!-- END PAGE CONTENT-->
            <div id="basic" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Add New Product</h4>
                        </div>
                        <form class="form-horizontal" role="form" method="post" action="create_warehouse.php">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label class="control-label">Select Warehouse</label>
                                            <select class="form-control" name="warehouse_id">
                                                <?php foreach ($warehouses as $warehouse): ?>
                                                    <option value="<?=$warehouse->id;?>"><?=$warehouse->name;?></option>
                                                <?php endforeach; ?>


                                            </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label class="control-label">Select Product</label>
                                            <select class="form-control" name="product_id">
                                                <?php foreach ($products as $product): ?>
                                                    <option value="<?=$product->id;?>"><?=$product->name;?></option>
                                                <?php endforeach; ?>
                                            </select>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label class="control-label">Quantity </label>
                                        <input class="form-control text-capitalize" placeholder="Quantity" type="number" required name="quantity">
                                    </div>
                                </div>
                            </div>


                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                                <button type="submit" class="btn blue-chambray" name="store_to_stock"><i class="fa fa-floppy-o"></i> Store To Stock</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div id="warehouse" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Create Warehouse</h4>
                        </div>
                        <form class="form-horizontal" role="form" method="post" action="create_warehouse.php">
                            <input type="hidden" name="_token" value="W8zSCsjviS3TMgi5OwlRoZXMLSwZFYVb3QkRtMul">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label class="control-label">Warehouse Name </label>
                                        <input class="form-control text-capitalize"  type="text" required name="warehouse_name">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label class="control-label">Warehouse Location </label>
                                        <input class="form-control text-capitalize" placeholder="Location" type="text" required name="warehouse_location">
                                    </div>
                                </div>
                            </div>


                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                                <button type="submit" class="btn blue-chambray" name="save_warehouse"><i class="fa fa-floppy-o"></i>Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php

    include 'inc/footer.php';
    ?>
