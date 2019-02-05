<?php
include "inc/header.php";
include "inc/nav.php";

 ?><div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content" style="min-height:830px">
            <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN PAGE TITLE-->
                    <?=displayMessage();?>
            <h3 class="page-title bold">Supplier Management
                <a class="btn blue-ebonyclay pull-right" data-toggle="modal" href="#basic">
                    Add New Supplier
                    <i class="fa fa-plus"></i>
                </a>
            </h3>
            <hr>
                                    <div class="row">
                            <div class="col-md-12">

                                <div class="portlet box blue-chambray">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-briefcase"></i>Supplier List
                                        </div>
                                        <div class="tools">
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                      <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>
                                                    ID
                                                </th>
                                                <th>
                                                    Supplier Name
                                                </th>
                                                <th>
                                                    Supplier Mobile
                                                </th>
                                                <th>
                                                    Supplier Email
                                                </th>
                                                <th>
                                                    Supplier Address
                                                </th>
                                                <th>
                                                    Product Item
                                                </th>
                                                <th>
                                                    Action
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>




                                                    <?php foreach ($suppliers as $supplier) {?>
                                                        <tr id="row1">
                                                        <td><?=$serial++;?></td>
                                                        <td><?=$supplier->name;?> </td>
                                                        <td><?=$supplier->phone;?></td>
                                                        <td> <?=$supplier->email;?></td>
                                                        <td><?=$supplier->address;?></td>
                                                        <td>
                                                        <a type="button" class="btn btn-info" data-toggle="modal" href="item_view.php?supplier_email=<?=$supplier->email;?>">View Item</a>

                                                        </td>
                                                        <td>

                                                            <form method="post" action="supply.php"   onSubmit="return confirm('Are you sure you want to delete this?')">
                                                                <a class="btn blue-chambray" data-toggle="modal" href="edit_supplier.php?supplier_id=<?=$supplier->id;?>"><i class="fa fa-edit"></i>Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;

                                                                    <input type="hidden"    name="del_supplier" value="<?=$supplier->email;?>">
                                                                <input type="submit"  class="btn red" id="delete" value="Delete">
                                                        </form>
                                                        </td>
                                                    </tr>



                                                <?php    }  ?>


                                                                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                        <!-- END PAGE CONTENT-->
            <div id="basic" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Add New Supplier</h4>
                        </div>
                        <form class="form-horizontal" role="form" method="post" action="create_supplier.php">


                            <div class="form-group">
                                <label for="inputEmail1" class="col-md-2 control-label">Supplier Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Supplier Name" required name="supplier_name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail1" class="col-md-2 control-label">Supplier Mobile</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Supplier Mobile Number" required="" name="supplier_mobile">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail1" class="col-md-2 control-label">Supplier Email</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Supplier Email" required="" name="supplier_email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail1" class="col-md-2 control-label">Supplier Address</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Supplier Address" required="" name="supplier_address">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="inputEmail1" class="col-md-4 control-label">Supplier Product Item:</label>
                                    <div class="description" style="width: 100%;border: 1px solid #ddd;padding: 10px;border-radius: 5px">
                                            <div class="col-md-12" id="planDescriptionContainer">
                                                <div class="input-group">
                                                    <input name="item[]" class="form-control margin-top-10" type="text" placeholder="Item Name">
                                                    <input name="item[]" class="form-control margin-top-10" type="text" placeholder="Item Name">
                                                    <input name="item[]" class="form-control margin-top-10" type="text" placeholder="Item Name">
                                                    <input name="item[]" class="form-control margin-top-10" type="text" placeholder="Item Name">

                                                    </div>
                                            </div>
                                        <div class="row">
                                            <div class="col-md-12 text-right margin-top-10">
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                                <button type="submit" class="btn blue-ebonyclay" name="create_supplier"><i class="fa fa-floppy-o"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php

include "inc/footer.php";
 ?>
