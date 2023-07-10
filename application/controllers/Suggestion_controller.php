<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suggestion_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Suggestion_model');

    }

    public function index()
    {
        $this->load->view('front-office/Suggestion_view');
    }

    public function getSuggestion(){
        $poid = 5;
        $sexe = 1;

        $row = $this->Suggestion_model->getRegimeBy($poid, $sexe);

        echo $row->idRegime;
    }


}