<?php
class User_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function checkLogin($email,$mdp){
        $query = $this->db->get_where('user',array('email'=>$email,'password'=>$mdp));
        $row = $query->row();
        if($row==null)
        {
            return false;
        }
        return true;
    }
}
?>