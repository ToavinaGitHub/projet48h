<?php
class Modifob_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function getUsers($id){
        $query=$this->db->get_where('user',array('idUser'=>$id));
        $row=$query->row_array();
        return $row;
    }
  
    public function getobjectif($id) {
        $query = $this->db->query('SELECT o.idObjectif,o.nom FROM user u JOIN userObjectif us ON u.idUser = us.idUser  join objectif o on us.idObjectif=o.idObjectif WHERE u.idUser = ?', array($id));
        $row = $query->row_array();
        return $row;
    }
    public function getAllOjectif(){
        $query=$this->db->get('objectif');
        $row=$query->result_array();
        return $row;
    }
    public function update($objectif,$id) {
        $query = $this->db->query('update userObjectif set idobjectif=? where idUser = ?', array($objectif,$id));
        
    }
}
?>