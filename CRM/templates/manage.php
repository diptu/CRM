
<?php
include 'inc/header.php';
include 'inc/nav.php';
?>

<!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <?php displayMessage();?>
                    <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title">Note
                <small>Lists</small>

            </h3>


            <div class="portlet-body">


                        <table class="table table-striped table-bordered table-hover" id="notices">
                            <thead>
                            <tr>
                                <th> Serial </th>
                                <th> Title </th>
                                <th> Detail </th>
                                <th> Date</th>

                                <th> Action </th>
                            </tr>
                            </thead>



                                        <tbody>
                                            <?php foreach($notes as $note){?>


                                            <tr >
                                                <td><?=$serial++;?></td>
                                                <td><?=$note->title;?></td>
                                                <td><?=$note->detail;?></td>
                                                <td><?=$note->created_at;?></td>

                                                <td>


                                                <form method="post" action="manage_note.php"   onSubmit="return confirm('Are you sure you want to delete this?')">
                                                    <a class="btn blue-chambray" href="edit_notes.php?note_id=<?=$note->id;?>"<i class="fa fa-edit"></i>Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;

                                                        <input type="hidden"    name="del_note" value="<?=$note->id;?>">
                                                    <input type="submit"  class="btn red" id="delete" value="Delete">
                                            </form>

                                                </td>
                                            </tr>
                                        <?php
                                    } ?>

                                        </tbody>



                        </table>
                    </div>

        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>



<!-- END CONTAINER -->


<?php
include 'inc/footer.php';
?>
