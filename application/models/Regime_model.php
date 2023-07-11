<?php
class Regime_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function getregime(){
        $query=$this->db->query('SELECT u.idRegime,u.duree,o.nom as nomObj,u.poids,u.details,u.montant,u.pourcViande,u.pourcPoisson,u.pourcPoulet FROM regime u  join objectif o on u.idObjectif=o.idObjectif  ');
        $row=$query->result_array();
        return $row;
    }

   
    public function getAllOjectif(){
        $query=$this->db->get('objectif');
        $row=$query->result_array();
        return $row;
    }
    public function insert($duree,$idob,$poids,$detail,$sexe,$montant,$viande,$poisson,$poulet) {
        $query = $this->db->query('insert into regime(idRegime,duree,idObjectif,poids,details,sexe,montant,pourcViande,pourcPoisson,pourcPoulet) values (null,?,?,?,?,?,?,?,?,?)', array($duree,$idob,$poids,$detail,$sexe,$montant,$viande,$poisson,$poulet));
        
    }
    // public function update($duree,$idob,$poids,$detail,$sexe,$montant,$viande,$poisson,$poulet,$id) {
    //     $query = $this->db->query('update regime set nom=?,details=?,poids=?,idObjectif=?,sexe=?,taille=? where idActSport=?', array($duree,$idob,$poids,$detail,$sexe,$montant,$viande,$poisson,$poulet,$id));
        
    // }
    // public function delete($id) {
    //     $query = $this->db->query('delete from regime where idRegime=?',array($id));
        
    // }

    
    
}
?>