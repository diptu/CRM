<?php   include 'config/init.php';
if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){
  $note = new Note;

    if(isset($_POST['del_note'])){
        $del_id = $_POST['del_note'];
        if($note->delete($del_id)){
            redirect('manage_note.php', 'Information has been Removed', 'success');
        }else{

            redirect('manage_note.php', 'Information has not been deleted this time', 'error');
        }
    }
  $product=new Product;

  $template=new Template('templates/manage.php');
  $template->serial=1;
  $template->notes=$product->getAllNotes();


  echo $template;
}
else{
    redirect('index.php' , '404 not found','error');
}





 ?>
