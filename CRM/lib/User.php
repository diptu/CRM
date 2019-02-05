<?php

class User{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function delete($email){
        $this->db->query("DELETE
        FROM profile
        WHERE profile.email = '$email'");
        //$this->db->query('DELETE FROM user WHERE email = '$del_email'');

        if($this->db->execute()){
            $this->db->query("DELETE
            FROM user
            WHERE user.email = '$email'");

            //$this->db->query('DELETE FROM profile WHERE email= '$del_email'');
            if($this->db->execute()) return true;
        }
        else return false;
    }

    public function update($data){
        $this->db->query(" UPDATE profile
            SET
            fname = :fname,
            lname = :lname,
            contact = :contact,
            bio = :bio,
            address = :address
            WHERE profile.email = :email
        ");
        $this->db->bind(':fname',$data['fname']);
        $this->db->bind(':lname',$data['lname']);
        $this->db->bind(':contact',$data['contact']);

        $this->db->bind(':bio',$data['bio']);
        $this->db->bind(':address',$data['address']);
        $this->db->bind(':email',$data['email']);
        if($this->db->execute()) return true;
        else return false;
    }
    public function updateProfile($data){
      $this->db->query(" UPDATE profile
          SET
          profile_pic = :profile_pic
          WHERE email = :email
          ");
      $this->db->bind(':profile_pic',$data['profile_pic']);
      $this->db->bind(':email',$data['email']);
      if($this->db->execute()) return true;
      else return false;
  }

  public function updateAdmin($data){
    $this->db->query(" UPDATE profile
        SET
        fname = :fname,
        lname = :lname,
        contact = :contact,
        address = :address
        WHERE email = :email
        ");
    $this->db->bind(':fname',$data['fname']);
    $this->db->bind(':lname',$data['lname']);
    $this->db->bind(':contact',$data['contact']);
    $this->db->bind(':address',$data['address']);
    $this->db->bind(':email',$data['email']);
    if($this->db->execute()) return true;
    else return false;
}


  public function getUserByemail($email)
  {
    $this->db->query("SELECT *
    FROM user
    JOIN profile ON
    profile.email=user.email
    WHERE user.email = '$email'");
    $result =   $this->db->single();
    return $result;
  }

    public function getUserByID($id){
                $this->db->query("SELECT *
                FROM profile
                WHERE profile.id = $id

                ");

            $result =   $this->db->single();
            return $result;
    }
    public function insert($data){
        $this->db->query(" INSERT INTO user (email,password,type)
             VALUES (:email,:password,:type)
            ");
        $this->db->bind(':email',$data['email']);
        $this->db->bind(':password',$data['password']);
        $this->db->bind(':type',$data['type']);

        try{
            $res = $this->db->execute();

                if($res) {
                    $this->db->query(" INSERT INTO profile (fname,lname,contact,address,email,suggestion)
                         VALUES (:fname,:lname,:contact,:address,:email,:suggestion)
                        ");
                    $this->db->bind(':fname',$data['fname']);
                    $this->db->bind(':lname',$data['lname']);
                    $this->db->bind(':contact',$data['contact']);
                    $this->db->bind(':address',$data['address']);
                    $this->db->bind(':email',$data['email']);
                    $this->db->bind(':suggestion',$data['suggestion']);

                    if($this->db->execute()) return true;
                    else return false;

                }else{
                    return false;
                }

         }catch(Exception $e){
            return false;
         }





    }
    public function getTotalCustomerByYear(){
        // $this->db->query('SELECT count(*) as customers , YEAR(created_at) as year
        // FROM profile
        // WHERE YEAR(created_at)='.$year.'
        // ');
        $this->db->query('SELECT count(*) as customers , YEAR(created_at) as year FROM profile
        INNER JOIN user ON
        profile.email = user.email
        WHERE user.type ="customer"
        AND YEAR(created_at)>2014 GROUP BY YEAR(created_at)');
        $resutls = $this->db->resultSet();
        return $resutls;
    }
    public function getAllUser(){
        $this->db->query('SELECT * FROM profile

            INNER JOIN user ON
            profile.email = user.email
            WHERE user.type ="customer"
             ORDER BY updated_at DESC');
        $resutls = $this->db->resultSet();
        return $resutls;
    }
    // public function getTotalUsr(){
    //     $this->db->query('SELECT count(*) FROM user ORDER BY updated_at DESC');
    //     $resutls = $this->db->resultSet();
    //     return $resutls;
    // }
    public function getUser($email,$pass){
        $this->db->query("SELECT *
        FROM user
        JOIN profile ON
        profile.email=user.email
        WHERE user.email = '$email'
        AND user.password = '$pass'");
        $result =   $this->db->single();
        return $result;

    }

    public function getInfo(){
        $this->db->query("SELECT *
        FROM user
        JOIN profile ON
        profile.email=user.email
        WHERE user.type = 'admin'
        ");
        $result =   $this->db->single();
        return $result;

    }

    public function insertUser($fname,$lname,$email,$pwd){
        $this->db->query("INSERT INTO profile (fname, lname , email)
        VALUES ('$fname', '$lname', '$email')");
        $result =   $this->db->execute();

        $this->db->query("INSERT INTO user (email, password , type)
        VALUES ('$email', '$pwd', 'customer')");
        $result =   $this->db->execute();
        return $result;

    }
}

?>
