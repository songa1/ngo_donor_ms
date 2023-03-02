<?php

require_once("../Config/Connection.php");

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
    public function getById(){
        try{
            $stm = $this->db->prepare("SELECT * FROM ngo WHERE id=?");
            $stm->execute([$this->id]);
            //$stm->setFetchMode()
            return $stm->fetchAll();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
    //function for updating

    //function for delete

    

}
?>