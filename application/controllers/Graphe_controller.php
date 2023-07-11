<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Graphe_controller extends  CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Inscription_model');
        $this->load->model('Admin_model');
        $this->load->model('Imc_model');
        $this->load->model('Graph_model');
    }

    public function clientsParMois()
    {
        $donnees_clients_par_mois = $this->Graph_model->getDonneesClientsParMois();
        $data['donnees'] = json_encode($donnees_clients_par_mois);
        $this->load->view('back-office/Graph_view',$data);
    }

    public function getDonnees()
    {
        // Effectuez la requête SQL pour récupérer les données des clients par mois depuis votre base de données
        // Assurez-vous que votre modèle est chargé

        $donnees_clients_par_mois = $this->Graph_model->getDonneesClientsParMois();
        $data['donnees'] = json_encode($donnees_clients_par_mois);
//        // Renvoyez les données au format JSON
        header('Content-Type: application/json');
       // echo json_encode($donnees_clients_par_mois);
    }
}