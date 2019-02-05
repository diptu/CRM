
<?php
include 'inc/header.php';
include 'inc/nav.php';
?>

<!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!--<//?php displayMessage();?>-->
                    <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> <?= $title;?>
                <small><?=$sub_title;?></small>

                <a class="btn blue-ebonyclay pull-right" data-toggle="modal" href="#basic">
                    Add Product
                    <i class="fa fa-plus"></i>
                </a>
            </h3>


            <div class="portlet-body">
                <div class="col-lg-4">

                    <form method="get" action="product.php">
                        <select name="category" class="form-control">
                            <option value="0">Choose Category</option>
                            <?php foreach ($categories as $category): ?>

                                <option value="<?=$category->id;?>"><?=$category->name;?></option>
                            <?php endforeach; ?>
                        </select><br>
                        <div class="form-group col-md-8">
                        <input type="submit" class="btn btn-success" value="FIND"></br>
                        </div>
                    </form>

                </div>


                        <table class="table table-striped table-bordered table-hover" id="notices">
                            <thead>
                            <tr>
                                <th> Seraial </th>
                                <th> Product Name </th>
                                <th> Product Category </th>
                                <th> Product Unit</th>
                                <th> Buying Price </th>
                                <th> Selling Price</th>
                                <th> Action </th>
                            </tr>
                            </thead>

                                    <?php foreach ($products as  $product): ?>
                                        <tbody>
                                            <tr >
                                                <td><?=$serial++;?></td>
                                                <td><?=$product->name;?></td>
                                                <td><?=$product->cname;?></td>
                                                <td><?=$product->unit;?></td>
                                                <td><?=$product->buying_price;?></td>
                                                <td><?=$product->selling_price;?></td>
                                                <td>
                                                    <!-- <form method="GET" action="edit.php">
                                                    </form> -->



                                                <form method="post" action="product.php">
                                                    <a type="submit" class="btn blue-chambray" href="edit.php?product_id=<?=$product->id;?>"<i class="fa fa-edit"></i>Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;

                                                        <input type="hidden"    name="del_id" value="<?=$product->id;?>">
                                                    <input type="submit"  class="btn red" id="delete" value="Delete">
                                            </form>


                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php endforeach; ?>


                        </table>
                    </div>

        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>



<!-- END CONTAINER -->





<!-- END CONTAINER -->
<div id="basic" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Add New Product</h4>
                        </div>
                        <form class="form-horizontal" role="form" method="POST" action="product.php">
                            <!--<input type="hidden" name="_token" value="WXG11oJ8Wo0ZCQGbWV3NYtuVQd339mJ7qIoeL7mZ">-->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label class="control-label">Product Category</label>
                                        <input class="form-control text-capitalize" placeholder="Product Name" type="text" required name="product_category">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label class="control-label">Product Name</label>
                                        <input class="form-control text-capitalize" placeholder="Product Name" type="text" required name="product_name">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label class="control-label">Buying Price </label>
                                        <input class="form-control text-capitalize" placeholder="Buying Price" type="number" required name="buying_price">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label class="control-label">Selling Price </label>
                                        <input class="form-control text-capitalize" placeholder="Selling Price" type="number" required name="selling_price">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label class="control-label">Unit</label>
                                        <select class="form-control" name="unit">
                                            <option value="Kg">Kg</option>
                                            <option value="Feet">Feet</option>
                                            <option value="Pieces">Pieces</option>
                                            <option value="Liter">Liter</option>
                                            <option value="Pound">Pound</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                                <button type="submit" class="btn blue-chambray" name="add_product"><i class="fa fa-floppy-o"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

<?php
include 'inc/footer.php';
?>
