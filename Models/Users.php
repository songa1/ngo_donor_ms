<?php

require_once '../Config/Database.php';

class Users {

    public $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function registerUser($data){
        $this->db->query('INSERT INTO ngo_users (user_id, user_name) VALUES (:user_id, :user_name)');
        $this->db->bind(':user_id', $data['user_id']);

        if($this->db->execute()){
            echo "Added data";
            return true;
        }else{
            echo "Failed to add data!";
            return false;
        }
    }
}

?>