<?php

require_once("../Config/Connection.php");

class FundModel extends Connection {

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

    public function registerFunds($id = null, $name, $email, $phone, $dob, $occupation, $ngo){
        $this->id = $id;
        $this->benefName = $name;
        $this->benefOccupation = $occupation;
        $this->benefPhone = $phone;
        $this->benefDob = $dob;
        $this->benefEmail = $email;
        $this->benefNgo = $ngo;

        try {
            $sql = $this->db->prepare("INSERT INTO ngo_beneficiaries(beneficiary_name, beneficiary_email, beneficiary_phone, beneficiary_dob, beneficiary_occupation, ngo_id)VALUES(?,?,?,?,?,?)");
            $sql->execute([$name, $email, $phone, $dob, $occupation, $ngo]);
            return $this->db->lastInsertId();
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function listFundsForNgo($ngo){
        try{
            $stm = $this->db->prepare("SELECT * FROM ngo_funds WHERE ngo_id = ?");
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