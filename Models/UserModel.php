<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/NGO_PROJECT/Config/Connection.php");

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

        try {
            $sql = $this->db->prepare("INSERT INTO ngo_employees(employee_name, employee_email, employee_phone, employee_dob, employee_password, ngo_id, role_id)VALUES(?,?,?,?,?,?,?)");
            $sql->execute([$name, $email, $phone, $dob, $password, $ngo, $role]);
            return "Employee ".$this->db->lastInsertId()." Added!";
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function login($email, $password){
        $query = $this->db->prepare("SELECT * FROM ngo_employees WHERE employee_email = ? AND employee_password = ?"); 
        $query->execute([$email, $password]); 

        $count = count($query->fetchAll());  
        if($count == 1)  
        {  
            $_SESSION["email"] = $email;  
            header("../Views/welcome.php");  
            return true;
        } else{  
            $message = '<script>alert("Wrong Data!")</script>'; 
            return false; 
        }
    }
}

?>