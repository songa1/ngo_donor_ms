<?php

require_once("../Config/Connection.php");

class DonorModel extends Connection {

    private $id;
    private $benefName;
    private $benefOccupation;
    private $benefPhone;
    private $benefDob;
    private $benefEmail;
    private $benefNgo;

    public function __construct(){
        parent::__construct();
    }

    public function registerDonor($id = null, $name, $email, $phone, $ngo){
        $this->id = $id;
        $this->donorName = $name;
        $this->donorEmail = $email;
        $this->donorPhone = $phone;
        $this->donorNgo = $ngo;

        try {
            $sql = $this->db->prepare("INSERT INTO ngo_donors(donor_name, donor_email, donor_phone, ngo_id) VALUES(?,?,?,?,?)");
            $sql->execute([$name, $email, $phone, $ngo]);
            return $this->db->lastInsertId();
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function listDonorsForNgo($ngo){
        try{
            $stm = $this->db->prepare("SELECT * FROM ngo_donors WHERE ngo_id = ?");
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