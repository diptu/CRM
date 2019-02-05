<?php

class Note{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function delete($id){
        $this->db->query('DELETE FROM note WHERE id='.$id);
        if($this->db->execute()) return true;
        else return false;
    }

    public function getNote($note_id){
                $this->db->query("SELECT *
                FROM note
                WHERE note.id = $note_id

                ");

            $result =   $this->db->single();
            return $result;
    }
    public function update($id, $data){
        $this->db->query(" UPDATE note
            SET
            title = :title,
            detail = :detail

            WHERE id = $id
        ");

        $this->db->bind(':title',$data['title']);
        $this->db->bind(':detail',$data['detail']);


        if($this->db->execute()) return true;
        else return false;
    }





}

?>
