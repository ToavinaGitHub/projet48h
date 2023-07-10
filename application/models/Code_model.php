<?php
class Code_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getAll()
    {
        $query = $this->db->get('code');
        $row = $query->result_array();
        return $row;
    }

    public function getPorteMonnaieBy($idUser){
        $query = $this->db->get_where('porteMonnaie',array('idUser'=>$idUser));
        $row = $query->row_array();
        return $row;
    }

    public function checkCode($code){
        $query = $this->db->get_where('code',array('valeur'=>$code));
        $row = $query->row();
        if($row==null)
        {
            return false;
        }else{
            return true;
        }
    }
    public function insertVola($idUser,$data,$idCode,$data2)
    {

        $this->db->update('porteMonnaie', $data, array('idUser' => $idUser));
        $this->db->update('code',$data2,array('idCode'=>$idCode));
    }
    public function getCode($valeur){
        $query = $this->db->get_where('code', array('valeur' => $valeur));
        return $query->row_array();
    }



}
?>