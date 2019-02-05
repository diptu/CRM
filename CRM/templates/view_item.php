<?php
include "inc/header.php";
include "inc/nav.php";
 ?>

 <div class="page-content-wrapper">
         <!-- BEGIN CONTENT BODY -->
         <div class="page-content" style="min-height:719px">
             <!-- BEGIN PAGE HEADER-->
                     <!-- BEGIN PAGE TITLE-->
             <h3 class="page-title bold">Items

             </h3>
             <hr>
                         <div class="portlet box green">
                 <div class="portlet-title">
                     <div class="caption">
                         <i class="fa fa-globe"></i> Item List</div>
                     <div class="tools"> </div>
                 </div>
                 <div class="portlet-body">

                             <div id="sample_2_wrapper" class="dataTables_wrapper no-footer">
                               <div class="table-scrollable"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="sample_2" role="grid" aria-describedby="sample_2_info">
                         <thead>
                         <tr role="row">
                             <th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" data-column-index="0" aria-sort="ascending" aria-label=" Name : activate to sort column descending" style="width: 187px;"> Serial </th>
                             <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" data-column-index="1" aria-label=" Number : activate to sort column ascending" style="width: 251px;"> Item </th>
                         </tr>
                         </thead>
                         <tbody>




                             <?php foreach ($item_list as $i) {?>
                                      <tr role="row" class="odd">
                                          <td class="sorting_1">
                                              <?php echo $serial++;?>
                                          </td>
                                          <td class="sorting_1">
                                              <?php echo $i->item;?>
                                          </td>
                                    </tr>
                            <?php }?>


                        </tbody>
                     </table></div>
</div>
                 </div>
             </div>

         </div>
     </div>
<?php
include "inc/footer.php";
 ?>
