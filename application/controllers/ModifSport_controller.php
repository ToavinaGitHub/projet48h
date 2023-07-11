<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModifSport_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModifSport_model');

    }

    public function index()

    {
        $id=$_GET['id'];
        $row=array();
       $row['spr']= $this->ModifSport_model->getAllSport($id);
       $row['obj']=$this->ModifSport_model->getAllOjectif();
        
        $this->load->view('back-office/ModifSport_view',$row);
    }
    public function update(){
        $id=$_POST['id'];
        $nom=$_POST['nom'];
        $details=$_POST['details'];
        $poids=$_POST['weight'];
        $idob=$_POST['goal'];
        $sexe=$_POST['sexe'];
        $taille=$_POST['height'];
       // var_dump($nom,$details,$poids,$idob,$sexe,$taille,$id);
       $this->ModifSport_model->update($nom,$details,$poids,$idob,$sexe,$taille,$id);
       redirect(base_url('Sport_controller/index'));
    }



}