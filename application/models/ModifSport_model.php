<?php
class ModifSport_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function update($nom,$detail,$poids,$idob,$sexe,$taille,$id) {
        $query = $this->db->query('update actSport set nom=?,details=?,poids=?,idObjectif=?,sexe=?,taille=? where idActSport=?', array($nom,$detail,$poids,$idob,$sexe,$taille,$id));
        
    }
    public function getAllSport($id){
        $query=$this->db->get_where('actSport',array('idActSport'=>$id));
        $row=$query->row_array();
        return $row;
    }
    public function getAllOjectif(){
        $query=$this->db->get('objectif');
        $row=$query->result_array();
        return $row;
    }
   

    
    
}
?>