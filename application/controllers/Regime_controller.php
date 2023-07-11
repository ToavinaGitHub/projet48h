<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Regime_model');

    }

    public function index()
    {
        $row=array();
        $row['regime']=$this->Regime_model->getregime();
         $row['obj']=$this->Regime_model->getAllOjectif();
        
      
        var_dump($row['regime']);
        
       $this->load->view('back-office/regime_view',$row);
    }
    public function insert(){
       
       
        $duree=$_POST['duree'];
        $idob   = $_POST['goal'];
        $poids  = $_POST['poids'];
        $detail = $_POST['detail'];
        $sexe   = $_POST['sexe'] ;
        $montant= $_POST['montant'];
        $viande = $_POST['viande'];
        $poisson= $_POST['poisson'];
        $poulet = $_POST['poulet'];
        var_dump($duree,$idob,$poids,$detail,$sexe,$montant,$viande,$poisson,$poulet);
        $this->Regime_model->insert($duree,$idob,$poids,$detail,$sexe,$montant,$viande,$poisson,$poulet);
        redirect(base_url('Regime_controller/index'));
    }
     
     public function delete(){
        $id=$_GET['id'];
        $this->Regime_model->delete($id);
        redirect(base_url('Regime_controller/index'));
     }



}