<?php
class TableauCroise_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function getTableauCroise()
    {
        $query = $this->db->query('SELECT u.nom, u.prenom,u.poids AS poidActuel,o2.nom AS obj,pU.poidsInit AS poidInitial,DATEDIFF(NOW(), pU.daty) AS differenceJours
        FROM
        user u
        JOIN userObjectif o ON u.idUser = o.idUser
        JOIN objectif o2 ON o.idObjectif = o2.idObjectif
        JOIN programmeUser pU ON u.idUser = pU.idUser;');
        $row = $query->result_array();
        return $row;
    }

}
?>