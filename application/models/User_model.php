<?php
class User_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function insererUser($array){
        $this->db->affected_rows();
    }
    public function  insererObjectif($array){
        $this->db->affected_rows();
    }

}
?>