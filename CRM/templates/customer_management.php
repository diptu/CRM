
<?php
include 'inc/header.php';
include 'inc/nav.php';
?>

<div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content" style="min-height:817px">
            <?=displayMessage();?>
            <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title bold">Customer
                <small> Customer-managment </small>

                <a class="btn blue-ebonyclay pull-right" data-toggle="modal" href="#basic">
                    Add Customer
                    <i class="fa fa-plus"></i>
                </a>
            </h3>
            <hr>
                        <!-- END PAGE TITLE-->
                        <!-- BEGIN PAGE CONTENT-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet box blue-chambray">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-briefcase"></i>Customer List
                                        </div>
                                        <div class="tools">
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-scrollable">

                                            <table class="table table-striped table-bordered table-hover" id="notices">
                                                <thead>
                                                <tr>
                                                    <th> Serial </th>
                                                    <th> Full Name </th>
                                                    <th> Contact </th>
                                                    <th> Email </th>
                                                    <th> Location</th>
                                                    <th> Detail </th>
                                                    <th> Action </th>

                                                </tr>
                                                </thead>

                                                        <?php foreach ($users as  $user): ?>
                                                            <tbody>
                                                                <tr >
                                                                    <td><?=$serial++;?></td>
                                                                    <td><?=$user->fname.' '.$user->lname;?></td>
                                                                    <td><?=$user->contact;?></td>
                                                                    <td><?=$user->email;?></td>
                                                                    <td><?=$user->address;?></td>
                                                                    <td><?=$user->bio;?></td>

                                                                    <td>
                                                                    <form method="post" action="customer.php"   onSubmit="return confirm('Are you sure you want to delete this?')">
                                                                        <a class="btn blue-chambray" data-toggle="modal" href="edit_customer.php?customer_email=<?=$user->email;?>"><i class="fa fa-edit"></i>Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;

                                                                            <input type="hidden"    name="del_user" value="<?=$user->email;?>">
                                                                        <input type="submit"  class="btn red" id="delete" value="Delete">
                                                                </form>
                                                                  </td>
                                                                </tr>
                                                            </tbody>
                                                        <?php endforeach; ?>


                                            </table>
                                        </div>
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
                            <h4 class="modal-title">Add New Customer</h4>
                        </div>
                        <form class="form-horizontal" role="form" method="post" action="create_customer.php">

                            <div class="form-group">
                                <label for="inputEmail1" class="col-md-2 control-label">First Name*</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Customer First Name" required name="fname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-md-2 control-label">Last Name*</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Customer Last Name" required name="lname">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail1" class="col-md-2 control-label">Phone</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" placeholder="Customer Phone"  name="phone">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail1" class="col-md-2 control-label">Email*</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" placeholder="Customer Email" required name="email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail1" class="col-md-2 control-label">Password*</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" placeholder="Customer Password" required name="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail1" class="col-md-2 control-label">Address</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Customer Address" required name="address">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail1" class="col-md-7 control-label">Suggestions or topics you would like to be included:</label>
                                <div class="col-md-12">
                                    <div class="col-md-12 ">
                                        <input type="text" class="form-control" placeholder="Your Text (Not Required)" name="include_word">
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                                <button type="submit" class="btn blue-ebonyclay" name="add_customer"><i class="fa fa-floppy-o"></i> Save</button>
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
