<?php

class Graph_model extends  CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getDonneesClientsParMois()
    {
        // Effectuez votre requête SQL pour récupérer les données des clients par mois depuis votre base de données
        // Assurez-vous d'adapter la requête en fonction de votre structure de base de données et de vos besoins

        $query = $this->db->query(' select MONTH(daty) as mois, count(*) as nombre_clients from programme GROUP BY mois');

        return $query->result();
    }
}