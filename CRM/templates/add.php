<?php
include "inc/header.php";
include "inc/nav.php";
?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
   <!-- BEGIN CONTENT BODY -->
   <div class="page-content">

       <div class="row">
           <div class="col-md-12">
               <!-- BEGIN EXAMPLE TABLE PORTLET-->

               <div id="load">

               </div>
               <div class="portlet box green">
                   <div class="portlet-title">
                       <div class="caption">
                           <i class="fa fa-edit"></i>Short Notes
                       </div>
                       <div class="tools">
                       </div>
                   </div>

                   <div class="portlet-body form">

                       <!------------------------ BEGIN FORM---------------------->
                       <form method="POST" action="dashboard.php" accept-charset="UTF-8" class="form-horizontal form-bordered">

                           <div class="form-body">
                               <div class="form-group">
                                   <label class="col-md-12">Title Name: <span class="required">
                                   * </span>
                                   </label>
                                   <div class="col-md-12">
                                       <input type="text" class="form-control" required name="note_name" placeholder="Title Name" >
                                   </div>
                               </div>

                               <div class="form-group">
                                   <label class="col-md-12">Detail: </label>

                                   <div class="col-md-12">
                                       <textarea class="form-control" name="note_detail" rows="10"></textarea>
                                   </div>
                               </div>
                               </div>
                               <div class="form-actions">
                                   <div class="row">
                                       <div class="col-md-12">
                                           <button type="submit" class="demo-loading-btn btn green col-md-12" name="note"><i class="fa fa-check"></i> Submit</button>
                                       </div>
                                   </div>
                               </div>
                       </form>
                   </div>
                   </div>
               </div>
               <!-- END EXAMPLE TABLE PORTLET-->
           </div>
       </div>
       <!-- END PAGE CONTENT-->
</div>


</div>


<!-- END CONTAINER -->

<?php
include "inc/footer.php";
?>
