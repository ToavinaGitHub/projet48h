<?php
class Sport_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function getactSport(){
        $query=$this->db->query('SELECT   u.idActSport,u.nom,u.details,u.poids,o.nom as nomObj,u.sexe,u.taille FROM actSport u  join objectif o on u.idObjectif=o.idObjectif  ');
        $row=$query->result_array();
        return $row;
    }

    public function getobjectif($id) {
        $query = $this->db->query('SELECT o.idObjectif,o.nom FROM actSport u  join objectif o on u.idObjectif=o.idObjectif WHERE u.idActSport= ?', array($id));
        $row = $query->row_array();
        return $row;
    }
    public function getAllOjectif(){
        $query=$this->db->get('objectif');
        $row=$query->result_array();
        return $row;
    }
    public function insert($nom,$detail,$poids,$idob,$sexe,$taille) {
        $query = $this->db->query('insert into actSport(idActSport,nom,details,poids,idObjectif,sexe,taille) values (null,?,?,?,?,?,?)', array($nom,$detail,$poids,$idob,$sexe,$taille));
        
    }
    public function update($nom,$detail,$poids,$idob,$sexe,$taille,$id) {
        $query = $this->db->query('update actSport set nom=?,details=?,poids=?,idObjectif=?,sexe=?,taille=? where idActSport=?', array($nom,$detail,$poids,$idob,$sexe,$taille,$id));
        
    }
    public function delete($id) {
        $query = $this->db->query('delete from actSport where idActSport=?',array($id));
        
    }

    
    
}
?>