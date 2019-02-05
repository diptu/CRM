<?php
include 'inc/header.php';
include 'inc/nav.php';
?>





        <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">

            <!-- BEGIN PAGE TITLE-->
            <h4 class="page-title"> <?=$title;?>
                <small>dashboard & statistics</small>
            </h4>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="dashboard-stat blue">
                        <div class="visual">
                            <i class="fa fa-comments"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="5"><?=$user_count;?></span>
                            </div>
                            <div class="desc"> Total Customer </div>
                        </div>
                        <!-- <a class="more" href="#"> View more
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="dashboard-stat red">
                        <div class="visual">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="15"><?=$supplier_count;?></span></div>
                            <div class="desc"> Total Supplier </div>
                        </div>
                        <!-- <a class="more" href="#"> View more
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="dashboard-stat green">
                        <div class="visual">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="2"><?=$warehouse_count;?></span>
                            </div>
                            <div class="desc"> Total Warehouse </div>
                        </div>
                        <!-- <a class="more" href="#"> View more
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a> -->
                    </div>

                </div>


                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                    <script type="text/javascript">
                      google.charts.load('current', {'packages':['bar']});
                      google.charts.setOnLoadCallback(drawChart);

                      function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                          ['Year',  'Customer Subscription'],
                          <?php foreach ($data as $d) {?>
                            ['<?=$d->year;?>','<?=$d->customers;?>'],
                         <?php } ?>

                        ]);

                        var options = {
                          chart: {
                            title: 'User Subscription rate',
                            subtitle: 'Number of new subscription from 2016 - ',
                          },
                          bars: 'vertical' // Required for Material Bar Charts.
                        };

                        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

                        chart.draw(data, google.charts.Bar.convertOptions(options));
                      }
                    </script>

                    <div id="barchart_material" style="width: 900px; height: 500px;"></div>

                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-11">
                    <div id="myfirstchart" style="height: 450px; width: 100%;"></div>

                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->


    </div>

<div class="modal fade" id="changePassword" tabindex="-1" role="changePassword" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Change Password</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="#">
                    <input type="hidden" name="_token" value="aw55IMAoqquaf1MqZZjrS70Y3JUuGJi0yn9saieB">

                    <input type="hidden" value="1" name="id">

                    <div class="form-group">
                        <label for="password" class="col-md-4 control-label">Old Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="passwordold" required>

                                                    </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-4 control-label">New Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                                                    </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                                    </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                        <button class="btn green" type="submit">Change</button>
                    </div>
                </form>


            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
<!-- END CONTAINER -->

<?php
include 'inc/footer.php';
?>
