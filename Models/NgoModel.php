<?php

require_once("C:/xampp/htdocs/NGO_PROJECT/Config/Connection.php");

class NgoModel extends Connection{
    private $id;
    private $name;
    private $phone;
    private $email;
    private $ngoAddress;
    private $ngoUrl;

    public function __construct($id=null, $name="",
     $phone="", $email="", $address="",$url=""){
        parent::__construct();
        $this->id = $id;
        $this->name=$name;
        $this->email = $email;
        $this->phone=$phone;
        $this->ngoAddress=$address;
        $this->ngoUrl = $url;
    }

    public function setId($id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }

    public function setName($name){
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }

    //function for saving into database
    public function addNgo(){
        try{
            $sql = $this->db->prepare("INSERT INTO ngo(ngo_name,ngo_email,ngo_phone,ngo_address, ngo_url)VALUES(?,?,?,?,?)");
            $sql->execute([$this->name, $this->email, $this->phone, $this->ngoAddress, $this->ngoUrl]);
            // return "Added a new NGO";
            return $this->db->lastInsertId();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //function for retrieving data from database
    public function getAll(){
        try{
            $stm = $this->db->prepare("SELECT * FROM ngo");
            $stm->execute();
            //$stm->setFetchMode()
            return $stm->fetchAll();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
    //function for retrieving one by Id
    public function getById($id){
        try{
            $stm = $this->db->prepare("SELECT * FROM ngo WHERE created_by=?");
            $stm->execute([$id]);
            //$stm->setFetchMode()
            return $stm->fetch();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
    //function for updating

    public function addNgoCreator($userId, $ngo_id){
        try {
            $sql = $this->db->prepare("UPDATE ngo SET created_by=? WHERE ngo_id=?");
            $sql->execute([$userId, $ngo_id]);
            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }

    }

    //function for delete

    public function deleteNgo($id){
        try{
            $stm = $this->db->prepare("DELETE FROM ngo_employees WHERE employee_id = ?");
            $stm->execute([$id]);
            return true;
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    

}
?>