<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TableauCroise_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Suggestion_model');
        $this->load->model('Code_model');
        $this->load->model('TableauCroise_model');

    }

    public function index()
    {
        $p['rows']= $this->TableauCroise_model->getTableauCroise();
        $this->load->view('back-office/TableauCroise_view',$p);
    }



}