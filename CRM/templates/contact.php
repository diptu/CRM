<?php
include "inc/header.php";
include "inc/nav.php";
 ?>

 <div class="page-content-wrapper">
         <!-- BEGIN CONTENT BODY -->
         <div class="page-content" style="min-height:719px">
             <!-- BEGIN PAGE HEADER-->
                     <!-- BEGIN PAGE TITLE-->
             <h3 class="page-title bold">Contact
                
             </h3>
             <hr>
                         <div class="portlet box green">
                 <div class="portlet-title">
                     <div class="caption">
                         <i class="fa fa-globe"></i> Contact List</div>
                     <div class="tools"> </div>
                 </div>
                 <div class="portlet-body">

                             <div id="sample_2_wrapper" class="dataTables_wrapper no-footer">
                               <div class="table-scrollable"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="sample_2" role="grid" aria-describedby="sample_2_info">
                         <thead>
                         <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" data-column-index="0" aria-sort="ascending" aria-label=" Name : activate to sort column descending" style="width: 187px;"> Name </th><th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" data-column-index="1" aria-label=" Number : activate to sort column ascending" style="width: 251px;"> Number </th><th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" data-column-index="2" aria-label=" Email : activate to sort column ascending" style="width: 261px;"> Email </th><th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" data-column-index="3" aria-label=" Action : activate to sort column ascending" style="width: 273px;"> Address </th></tr>
                         </thead>
                         <tbody>




                             <?php foreach ($users as $user) {?>
                                      <tr role="row" class="odd">
                                          <td class="sorting_1">
                                              <?php echo $user->fname.' '.$user->lname;?>
                                          </td>
                                          <td class="sorting_1">
                                              <?php echo $user->contact;?>
                                          </td>
                                          <td class="sorting_1">
                                              <?php echo $user->email;?>
                                          </td>
                                          <td class="sorting_1">
                                              <?php echo $user->address;?>
                                          </td>



                                 </tr>
                            <?php }?>


                        </tbody>
                     </table></div>
</div>
                 </div>
             </div>
                         <!-- END PAGE CONTENT-->
             <div id="basic" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                             <h4 class="modal-title">Add New Contact</h4>
                         </div>
                         <form class="form-horizontal" role="form" method="post" action="#">
                             <input type="hidden" name="_token" value="dXMovydE4khKkBdC99l61IyMxGpAVPzuejXqmsFk">

                             <div class="form-group">
                                 <div class="col-md-12">
                                     <label for="inputEmail1" class="col-md-12">First Name</label>
                                     <div class="col-md-12">
                                         <input type="text" class="form-control" placeholder="First Name" required="" name="name">
                                     </div>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <div class="col-md-12">
                                     <label for="inputEmail1" class="col-md-12">Last Name</label>
                                     <div class="col-md-12">
                                         <input type="text" class="form-control" placeholder="Last Name" required="" name="last_name">
                                     </div>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <div class="col-md-12">
                                     <label for="inputEmail1" class="col-md-12">Email</label>
                                     <div class="col-md-12">
                                         <input type="text" class="form-control" placeholder="Contact Email" required="" name="email">
                                     </div>
                                 </div>
                             </div>


                             <div class="form-group">
                                 <div class="col-md-12">
                                     <label for="inputEmail1" class="col-md-12">Contact Number:</label>
                                     <div class="description" style="width: 100%;border: 1px solid #ddd;padding: 10px;border-radius: 5px">
                                             <div class="col-md-12" id="planDescriptionContainer">
                                                 <div class="input-group">
                                                     <input name="number[]" class="form-control margin-top-10" type="number" required="" placeholder="Contact Number">
                                                     <span class="input-group-btn">
                                                         <button class="btn btn-danger margin-top-10 delete_desc" type="button"><i class="fa fa-times"></i></button></span>
                                                 </div>
                                             </div>
                                         <div class="row">
                                             <div class="col-md-12 text-right margin-top-10">
                                                 <button id="btnAddDescription" type="button" class="btn btn-sm grey-mint pullri">Add Number</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="modal-footer">
                                 <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                                 <button type="submit" class="btn blue-ebonyclay"><i class="fa fa-floppy-o"></i> Save</button>
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
