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

    public function getUserByEmail($email)
    {
        return $this->db->get_where('user', ['email' => $email])->row_array();
    }
    public function checkLogin($email,$mdp){
        $query = $this->db->get_where('user',array('email'=>$email,'mdp'=>$mdp));
        $row = $query->row();

        if($row==null)
        {
            return false;
        }
        return true;
    }

    public function getUserWith($email,$mdp){
        $query = $this->db->get_where('user',array('email'=>$email,'mdp'=>$mdp));
        $row = $query->row();
        return $row;
    }



}
?>