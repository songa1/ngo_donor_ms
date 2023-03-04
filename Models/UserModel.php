<?php

require_once("../Config/Connection.php");

class UserModel extends Connection {

    private $id;
    private $userName;
    private $userEmail;
    private $userPhone;
    private $userDob;
    private $userPass;
    private $userNgo;
    private $userRole;

    public function __construct(){
        parent::__construct();
    }

    public function registerUser($id = null, $name, $email, $phone, $dob, $password, $ngo, $role){
        $this->id = $id;
        $this->userName = $name;
        $this->userEmail = $email;
        $this->userPhone = $phone;
        $this->userDob = $dob;
        $this->userPass = $password;
        $this->userNgo = $ngo;
        $this->userRole = $role;

        require_once 'NgoModel.php';

        try {
            $sql = $this->db->prepare("INSERT INTO ngo_employees(employee_name, employee_email, employee_phone, employee_dob, employee_password, ngo_id, role_id)VALUES(?,?,?,?,?,?,?)");
            $sql->execute([$name, $email, $phone, $dob, $password, $ngo, $role]);
            return $this->db->lastInsertId();
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function login($email, $password){
        try {
            $query = $this->db->prepare("SELECT * FROM ngo_employees WHERE employee_email = ? AND employee_password = ?"); 
            $query->execute([$email, $password]); 

            $count = count($query->fetchAll());  
            if($count == 1)  
            {  
                $_SESSION["email"] = $email;  
                header("../welcome.php");  
                $message = '<script>alert("Login successful!!")</script>';
                return $message;
            } else{  
                $message = '<script>alert("Wrong Data!")</script>'; 
                return $message; 
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function listEmployees($ngo){
        try{
            $stm = $this->db->prepare("SELECT * FROM ngo_employees WHERE ngo_id = ?");
            $stm->execute([$ngo]);
            //$stm->setFetchMode()
            return $stm->fetchAll();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
}

?>