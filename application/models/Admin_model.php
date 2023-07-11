<?php

class Admin_model extends  CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function CheckLogin($email,$mdp){
        $query= $this->db->get_where('admin',array('email'=> $email, 'mdp'=>$mdp))-> row_array();
         if ($query == null){
             return false;
         }else{
             return true;
         }
    }

    public function getAllUser(){
        return $this->db->get('user')->result_array();
    }

    public function getPrograms()
    {
        $query = $this->db->query("SELECT u.nom AS nom_client, a.nom AS nom_actSport, a.details AS details_actSport
                              FROM user u
                              LEFT JOIN programme p ON u.idUser = p.idUser
                              LEFT JOIN actSport a ON p.idActSport = a.idActSport");

        return $query->result_array();
    }

    public function  getRecettes(){
        $this->db->get('recette')->result_array();
    }

}