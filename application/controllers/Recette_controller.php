<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recette_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Recette_model');

    }

    public function index()
    {
        $row=array();
        $idreg=$_GET['id'];
        
        $row['rec']=$this->Recette_model->getAllrecette();
        
        
      
        // $this->Recette_model->insertInto($idreg,$idrec);
        
        $this->load->view('back-office/Recette_view',$row);
    }
    // public function insertinto(){
    //     $idrec=$_GET['id'];
    //     ;$this->Recette_model->insertInto($idreg,$idrec)
    // }
    

}