<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');

    }

    public function index()
    {
        $this->load->view('front-office/Profil_view');
    }

    public function makaol(){
        
       $id=2;
       $row=array();
        $row['user']=$this->User_model->getUsers($id);
        $dateNaissance = $row['user']['dtn'];
        $row['age'] = $this->calculateAge($dateNaissance);
        $row['ob']=$this->User_model->getobjectif($id);
        $this->load->view('front-office/Profil_view',$row);
        

    }
   
    private function calculateAge($dateNaissance) {
        $now = new DateTime();
        $dob = new DateTime($dateNaissance);
        $age = $now->diff($dob)->y;
        return $age;
    }

}