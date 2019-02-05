<?php


class Supplier{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function insert($data){

        $this->db->query(" INSERT INTO supplier (name,phone,address,email)
             VALUES (:name,:phone,:address,:email)
            ");
        $this->db->bind(':name',$data['name']);
        $this->db->bind(':phone',$data['phone']);
        $this->db->bind(':address',$data['address']);
        $this->db->bind(':email',$data['email']);


        if($this->db->execute()) return true;

        else return false;

    }
    public function insertItem($data){

        $this->db->query(" INSERT INTO item_list (email,item)
             VALUES (:email,:item)
            ");

        $this->db->bind(':email',$data['email']);
        $this->db->bind(':item',$data['item']);


        if($this->db->execute()) return true;

        else return false;

    }
    public function update($id, $data){
        $this->db->query(" UPDATE supplier
            SET
            name = :name,
            address = :address,
            email = :email,
            phone = :phone
            WHERE id = $id
        ");
        $this->db->bind(':name',$data['name']);
        $this->db->bind(':address',$data['address']);
        $this->db->bind(':email',$data['email']);
        $this->db->bind(':phone',$data['phone']);
        if($this->db->execute()) return true;
        else return false;
    }

    public function getSupplier($id){
                $this->db->query("SELECT *
                FROM supplier
                WHERE supplier.id = $id

                ");

            $result =   $this->db->single();
            return $result;
    }
    public function getItemByEmail($email){
                $this->db->query("SELECT *
                FROM item_list
                WHERE item_list.email = :email

                ");
                $this->db->bind(':email',$email);
                $resutls = $this->db->resultSet();
                return $resutls;
    }

    public function getAllSuppliers(){
        $this->db->query('SELECT * FROM supplier

        ');
        $resutls = $this->db->resultSet();
        return $resutls;
    }
    public function Delete($email){
        $this->db->query('DELETE  FROM supplier WHERE supplier.email= :email ');
        $this->db->bind(':email',$email);
        if($this->db->execute())return true;
        else return false;
    }
    public function DeleteItem($email){
        $this->db->query('DELETE FROM item_list WHERE item_list.email = :email ');
        $this->db->bind(':email',$email);
        if($this->db->execute())return true;
        else return false;
    }
}

?>
