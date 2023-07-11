<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sport_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sport_model');

    }

    public function index()
    {
        $row=array();
        $row['sport']=$this->Sport_model->getactSport();
        $row['obj']=$this->Sport_model->getAllOjectif();


        //var_dump($row['sport']);

        $this->load->view('back-office/SportB_view',$row);
    }
    public function insert(){
        $nom=$_POST['nom'];
        $details=$_POST['details'];
        $poids=$_POST['weight'];
        $idob=$_POST['goal'];
        $sexe=$_POST['sexe'];
        $taille=$_POST['height'];
        // var_dump($nom,$details,$poids,$idob,$sexe,$taille);
        $this->Sport_model->insert($nom,$details,$poids,$idob,$sexe,$taille);
        redirect(base_url('Sport_controller/index'));
    }

    public function delete(){
        $id=$_GET['id'];
        $this->Sport_model->delete($id);
        redirect(base_url('Sport_controller/index'));
    }



}