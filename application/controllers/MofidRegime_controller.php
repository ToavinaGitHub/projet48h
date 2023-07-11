<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModifRegime_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModifRegime_model');

    }

    public function index()

    {
        $id=$_GET['id'];
        $row=array();
       $row['spr']= $this->ModifRegime_model->getReg($id);
       $row['obj']=$this->ModifRegime_model->getAllOjectif();
        
        $this->load->view('back-office/ModifRegime_view',$row);
    }
    public function update(){
        $duree  =$_POST['duree']
        $idob  =$_POST['goal']
        $poids =$_POST['poids']
        $detail =$_POST['detail']
        $sexe =$_POST['sexe']
        $montan =$_POST['montant']
        $viande =$_POST['viande']
        $poisson=$_POST['poisson'] 
        $poulet =$_POST['poulet']
        $id =$_POST['id']
       // var_dump($nom,$details,$poids,$idob,$sexe,$taille,$id);
       $this->ModifRegime_model->update($duree,$idob,$poids,$detail,$sexe,$montant,$viande,$poisson,$poulet,$id);
       redirect(base_url('ModifRegime_controller/index'));
    }



}