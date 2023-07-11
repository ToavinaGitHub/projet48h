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
        $idUser = $this->session->userdata('idUser');
        $this->load->model('Imc_model');
        $imcData = $this->Imc_model->calculateIMC($idUser);

        if ($imcData) {
            $data['imc'] = $imcData['imc'];
            $data['resultat'] = $imcData['resultat'];
        } else {
            $data['imc'] = null; // Utilisateur introuvable
        }
        $this->load->view('votre_vue', $data);
    }


}