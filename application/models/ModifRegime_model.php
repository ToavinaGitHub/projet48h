

<?php
class ModifRegime_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
     }
    public function update($duree,$idob,$poids,$detail,$sexe,$montant,$viande,$poisson,$poulet,$id) {
        $query = $this->db->query('update regime set nom=?,details=?,poids=?,idObjectif=?,sexe=?,taille=? where idActSport=?', array($duree,$idob,$poids,$detail,$sexe,$montant,$viande,$poisson,$poulet,$id));
        
    }
    public function getReg($id){
        $query=$this->db->get_where('regime',array('idRegime'=>$id));
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