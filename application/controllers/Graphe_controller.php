<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Graphe_controller extends  CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Graph_model');
    }

    public function clientsParMois()
    {
        $donnees_clients_par_mois = $this->Graph_model->getDonneesClientsParMois();

        $data['donnees'] = json_encode($donnees_clients_par_mois);
        $this->load->view('back-office/Graph_view',$data);
    }


}