<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content" style="min-height:700px">
        <!-- BEGIN PAGE HEADER-->
                <!-- BEGIN PAGE TITLE-->
        <div class="row">
            <div class="col-md-12 text-right margin-top-20">
                <div class="portlet box blue-madison">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-th"></i><?=$warehouse->name;?>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover" id="awards">
                            <thead>
                            <tr>
                                <th> Serial Id </th>
                                <th> Product Name </th>
                                <th> Stock </th>
                                <th> Buying Price </th>
                                <th> Selling Price</th>

                            </tr>
                            </thead>
                            <tbody>


                                <?php foreach ($products as $product) {?>
                                    <tr>
                                        <td><?=$serial++;?></td>
                                        <td><b><?=$product->name;?></b></td>
                                        <td><b><?=$product->quantity;?></b> <?=$product->unit;?></td>
                                        <td><b><?=$product->buying_price;?></b></td>
                                        <td><b><?=$product->selling_price;?></b></td>
                                    </tr>

                                <?php   } ?>

                        </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-12 text-center">

                            </div>
                        </div>

                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
        <!-- END PAGE CONTENT-->
    </div>
</div>
<?php include 'inc/footer.php'; ?>
