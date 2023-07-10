<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modifpoids_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modifpoids_model');

    }

    public function index()
    {
        $this->load->view('front-office/ModifPoids_view');
    }

    public function makaol(){
        
       $id=2;
       $row=array();
        $row['user']=$this->Modifpoids_model->getUsers($id);
        $this->load->view('front-office/ModifPoids_view',$row);
        

    }
    public function updatePoids()
    {
      
        $id=2;
        $newPoids=$_POST['new-weight'];
        $this->Modifpoids_model->update($newPoids,$id);
        
    }
   

}