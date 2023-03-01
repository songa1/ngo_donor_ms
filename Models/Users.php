<?php

class Users {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function registerUser($data){
        $this->db->query('INSERT INTO ngo_users (user_id, user_name) VALUES (:user_id, :user_name)');
        $this->db->bind(':user_id', $data['user_id']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}

?>