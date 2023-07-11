<?php
class User_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function getAllrecette(){
        $query=$this->db->get('recette');
        $row=$query->result_array();
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
    public function insert($nom,$detail,$sary) {
        $query = $this->db->query('insert into recette(idActSport,nom,details,sary) values (null,?,?,?)', array($nom,$detail,$sary));
        
    }
    
    
}
?>