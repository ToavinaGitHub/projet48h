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
    public function getUsers($id){
        $query=$this->db->get_where('user',array('idUser'=>$id));
        $row=$query->row_array();
        return $row;
    }
    public function getAllOjectif($id){
        $query=$this->db->get('objectif',array('idUser'=>$id));
        $row=$query->result_array();
        return $row;
    }
    public function getobjectif($id) {
        $query = $this->db->query('SELECT o.idObjectif,o.nom FROM user u JOIN userObjectif us ON u.idUser = us.idUser  join objectif o on us.idObjectif=o.idObjectif WHERE u.idUser = ?', array($id));
        $row = $query->row_array();
        return $row;
    }
    public function getUserByEmail($email)
    {
        return $this->db->get_where('user', ['email' => $email])->row_array();
    }


}
?>