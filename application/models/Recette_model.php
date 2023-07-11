<?php
class Recette_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function getAllrecette(){
        $query=$this->db->get('recette');
        $row=$query->result_array();
        return $row;
    }
   
    public function insert($nom,$detail,$sary) {
        $query = $this->db->query('insert into recette(idActSport,nom,details,sary) values (null,?,?,?)', array($nom,$detail,$sary));
        
    }
    public function insertInto($idreg,$idrec){
        $query = $this->db->query('insert into RegimeRecette(idRegime,idRecette) values (?,?)', array($idreg,$idrec));
    }
    
    
}
?>