<?php

class Inscription_model extends  CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getAllObjectif(){
        return $this->db->get('objectif')->result_array();
    }

    public function getLastUserId(){
        return $this->db->insert_id();
    }

    public function createPorteMonnaie(){

    }
}