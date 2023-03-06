<?php

require_once("../Config/Connection.php");

class FundModel extends Connection {

   

    public function __construct(){
        parent::__construct();
    }

    public function registerFunds($id = null, $source, $amount, $ngo, $type){
        $this->id = $id;
        $this->fundSource = $source;
        $this->fundAmount = $amount;
        $this->fundNgo = $ngo;
        $this->fundType = $type;

        try {
            $sql = $this->db->prepare("INSERT INTO ngo_funds (fund_donor, fund_amount, ngo_id, fund_type)VALUES(?,?,?,?)");
            $sql->execute([$source, $amount, $ngo, $type]);
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

    public function listAllTypesOfFunds(){
        try{
            $stm = $this->db->prepare("SELECT * FROM ngo_funtype");
            $stm->execute();
            return $stm->fetchAll();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
}

?>