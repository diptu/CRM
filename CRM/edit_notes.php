<?php
  include 'config/init.php';
  if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){
      $note = new Note;

      $note_id=isset($_GET['note_id']) ? $_GET['note_id'] : null;

        if(isset($_POST['update_note'])){

            $data = array();
            $data['title'] = $_POST['note_name'];
            $data['detail'] = $_POST['note_detail'];


            if($note->update($note_id,$data)){
                redirect('manage_note.php' , 'Note has been updated','success');
            }else{
                redirect('manage_note.php' , 'something went wrong','error');
            }

        }

         $template = new Template('templates/note_edit.php');
         $template->note = $note->getNote($note_id);

         echo $template;

         //echo $product_id;
  }else{
      redirect('index.php', '404 not found','error');
  }

 ?>
