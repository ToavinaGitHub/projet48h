<?php
class Modiftaille_model extends CI_Model{
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
    public function update($taille,$id) {
        $query = $this->db->query('update user set taille=? where idUser = ?', array($taille,$id));
        
    }
    
    
}
?>