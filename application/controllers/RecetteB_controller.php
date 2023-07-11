<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');

    }

    public function index()
    {
        $this->load->view('front-office/Login_view');
    }

    public function insert(){
        $nom=$_POST['nom'];
        $details=$_POST['details'];
        $poids=$_POST['weight'];
        $idob=$_POST['goal'];
        $sexe=$_POST['sexe'];
        $taille=$_POST['height'];
        var_dump($nom,$detail,$poids,$idob,$sexe,$taille);
         $this->Sport_model->insert($nom,$details,$poids,$idob,$sexe,$taille);
         $row=array();
         $row['sport']=$this->Sport_model->getactSport();
         $row['obj']=$this->Sport_model->getAllOjectif();
         //var_dump($row['obj']);
         $this->load->view('back-office/sportB_view',$row);
    }

}