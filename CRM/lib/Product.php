<?php

class Product{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function addNotes($title,$detail){
        //echo $title;
        $this->db->query("INSERT INTO note (title,detail)
        VALUES ('$title','$detail')");
        $result =   $this->db->execute();
        return $result;
     }

    public function update($id, $data){
        $this->db->query(" UPDATE products
            SET
            category_id = :category_id,
            name = :name,
            unit = :unit,
            buying_price = :buying_price,
            selling_price = :selling_price
            WHERE id = $id
            ");
        $this->db->bind(':category_id',$data['category_id']);
        $this->db->bind(':name',$data['name']);
        $this->db->bind(':unit',$data['unit']);
        $this->db->bind(':buying_price',$data['buying_price']);
        $this->db->bind(':selling_price',$data['selling_price']);

        if($this->db->execute()) return true;
        else return false;
    }

    public function getAllProducts(){
        $this->db->query('SELECT products.*,categories.name AS cname
                          FROM products
                          INNER JOIN categories
                          ON products.category_id=categories.id
                          ORDER BY products.created_at DESC');

        $resutls = $this->db->resultSet();
        return $resutls;
    }
    public function getAllNotes(){
        $this->db->query('SELECT * from note ORDER BY note.updated_at');
        $res=$this->db->resultSet();
        return $res;

    }
    public function getCategories(){
        $this->db->query('SELECT * from categories');
        $resutls    =   $this->db->resultSet();
        return $resutls;
    }
    public function getCategoryById($category_id){
        $this->db->query("SELECT products.*, categories.name AS cname
        FROM products
        INNER JOIN categories
        ON products.category_id = categories.id
        WHERE products.category_id = $category_id
        ORDER BY products.created_at DESC
        ");

        $results = $this->db->resultSet();
        return $results;
    }

    public function addNewCategory($category_name){


        $this->db->query("INSERT INTO categories (name)
        VALUES ('$category_name')");
        $result =   $this->db->execute();
        return $result;
        // if($result){
        //     $category = $this->getCategoryByName($category_name);
        //     return $category;
        // }else{
        //     redirect('product.php' ,'Something went wrong','success');
        // }
        //
        // $this->db->query('SELECT * from categories WHERE categories.id ='.$category_id);
        // $result =   $this->db->single();
        // return $result;

    }
    public function addNewProduct($product_name,$unit,$buying_price,$selling_price,$category_id){
        $this->db->query("INSERT INTO products (name,unit,buying_price,selling_price,category_id)
        VALUES ('$product_name','$unit','$buying_price','$selling_price','$category_id')");
        $result =   $this->db->execute();
        return $result;
    }


    public function getCategory($category_id){
        $this->db->query('SELECT * from categories WHERE categories.id ='.$category_id);
        $result =   $this->db->single();
        return $result;

    }

    public function getProduct($id){
        $this->db->query("SELECT products.*,categories.name AS cname
                          FROM products
                          INNER JOIN categories
                          ON products.category_id=categories.id
                          WHERE products.id =".$id);
        $result =   $this->db->single();
        return $result;
        //
        //
        //
        // $this->db->query('SELECT * from products WHERE products.id ='.$id);
        // $result =   $this->db->single();
        // return $result;

    }
    public function getCategoryByName($category_name){
        $this->db->query("SELECT id from categories WHERE name ='$category_name'");
        $result =   $this->db->single();
        return $result;
        //var_dump($result);
    }

    public function delete($id){
        $this->db->query('DELETE FROM products WHERE id='.$id);
        if($this->db->execute()) return true;
        else return false;
    }
}

?>
