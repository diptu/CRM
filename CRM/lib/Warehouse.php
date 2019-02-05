<?php

class Warehouse{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function getWarehouseProducts($id){

        $this->db->query("SELECT products.*,stock.quantity as quantity
                          FROM products
                          INNER JOIN stock
                          ON products.id = stock.product_id
                          INNER JOIN warehouse
                          on stock.warehouse_id = warehouse.id
                          WHERE warehouse.id =".$id);


                          $resutls = $this->db->resultSet();
                          return $resutls;
    }
    public function getAllWarehouse(){

        $this->db->query('SELECT * FROM warehouse');
        $resutls = $this->db->resultSet();
        return $resutls;
    }
    public function insert($data){

        $this->db->query(" INSERT INTO warehouse (name,address)
             VALUES (:name,:address)
            ");
        $this->db->bind(':name',$data['name']);
        $this->db->bind(':address',$data['address']);
        if($this->db->execute()) return true;
        else return false;

    }
    public function update($id, $data){
        $this->db->query(" UPDATE warehouse
            SET
            name = :name,
            address = :address
            WHERE id = $id
        ");
        $this->db->bind(':name',$data['name']);
        $this->db->bind(':address',$data['address']);
        if($this->db->execute()) return true;
        else return false;
    }
    public function delete($id){
        $this->db->query('DELETE FROM warehouse WHERE id='.$id);
        if($this->db->execute()) return true;
        else return false;
    }

    public function insertToStock($data){
        $this->db->query(" INSERT INTO stock (warehouse_id,product_id,quantity)
             VALUES (:warehouse_id,:product_id, :quantity)
            ");
        $this->db->bind(':warehouse_id',$data['warehouse_id']);
        $this->db->bind(':product_id',$data['product_id']);
        $this->db->bind(':quantity',$data['quantity']);
        if($this->db->execute()) return true;
        else return false;


    }
    public function getWarehouse($warehouse_id){
                $this->db->query("SELECT *
                FROM warehouse
                WHERE warehouse.id = $warehouse_id

                ");

            $result =   $this->db->single();
            return $result;
    }
}

?>
