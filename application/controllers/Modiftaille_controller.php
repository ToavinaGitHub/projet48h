<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modiftaille_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modiftaille_model');

    }

    public function index()
    {
        $this->load->view('front-office/ModifTaille_view');
    }

    public function makaol(){

        $id=$_SESSION['user']->idUser;
        $row=array();
        $row['user']=$this->Modiftaille_model->getUsers($id);

        $this->load->view('front-office/ModifTaille_view',$row);
        $this->makaol();

    }

    public function updateTaille()
    {

        $id=$_SESSION['user']->idUser;
        $newtaille=$_POST['new-height'];
        $this->Modiftaille_model->update($newtaille,$id);
    }

}