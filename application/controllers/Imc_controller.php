<?php

class Imc_controller extends  CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Inscription_model');
        $this->load->model('Admin_model');
        $this->load->model('Imc_model');
    }


    public function showIMC() {
        $idUser = $_SESSION['user']->idUser;
        $imcData = $this->Imc_model->calculateIMC($idUser);

        $data = array();
        if ($imcData) {
            $data['imc'] = $imcData['imc'];
            $data['resultat'] = $imcData['resultat'];

        }

        var_dump($data);
        $this->load->view('front-office/Imc_view', $data);
    }


}