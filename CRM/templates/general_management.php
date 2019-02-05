<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>
<div class="page-content-wrapper">
 <div class="page-content" style="min-height:531px">
          <!-- BEGIN PAGE HEADER-->
                  <!-- BEGIN PAGE TITLE-->
          <h3 class="page-title bold">General Management
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
                          <form method="POST" action="general_management.php" class="form-horizontal form-bordered" enctype="multipart/form-data">

                              <div class="form-body">



                                  <div class="form-group">
                                      <label class="col-md-2 control-label">First Name: <span class="required">
                                      * </span>
                                      </label>
                                      <div class="col-md-6">
                                          <input type="text" class="form-control" name="fname" placeholder="Website Title" value="<?=$admin->fname;?>">
                                      </div>
                                  </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Last Name: <span class="required">
                                    * </span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="lname" placeholder="Website Title" value="<?=$admin->lname;?>">
                                    </div>
                                </div>

                                 

                                  <div class="form-group">
                                      <label class="col-md-2 control-label">Mobile: <span class="required">
                                          * </span>
                                      </label>
                                      <div class="col-md-6">
                                          <input type="text" class="form-control" name="mobile" placeholder="Mobile" value="<?=$admin->contact;?>">
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-md-2 control-label">Address: <span class="required">  * </span></label>

                                      <div class="col-md-6">
                                          <input type="text" class="form-control" name="address" placeholder="Name" value="<?=$admin->address;?>">
                                      </div>
                                  </div>





                                  <div class="form-actions">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <button type="submit" data-loading-text="Updating..." name="update" class="demo-loading-btn btn grey-mint col-md-12"><i class="fa fa-check"></i> submit</button>

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
