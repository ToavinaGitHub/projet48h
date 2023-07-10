<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modifob_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modifob_model');

    }

    public function index()
    {
        $this->load->view('front-office/ModifObjectif_view');
    }

    public function makaol(){
        
       $id=2;
       $row=array();
       
        $row['ob']=$this->Modifob_model->getobjectif($id);
         $row['obj']=$this->Modifob_model->getAllOjectif();
         $this->load->view('front-office/ModifObjectif_view',$row);
        

    }
   
    public function updateob()
    {
      
        $id=2;
        $newob=$_POST['new-goal'];
     $this->Modifob_model->update($newob,$id);
        
    }
   
    

}