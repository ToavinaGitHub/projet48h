<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Registration_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('User_model');
        $this->load->model('Inscription_model');

    }



    public function submit(){

        // Récupérer les données du formulaire
        $nom = $_POST['nom'];
        $prenoms = $this->input->post('prenoms');
        $dtn = $this->input->post('dtn');
        $email = $this->input->post('email');
        $password = $this->input->post('mdp');
        $poids = $this->input->post('poids');
        $sexe = $this->input->post('sexe');
        $taille = $this->input->post('taille');
        $objectif = $this->input->post('objectif');

        // Insérer les données dans la base de données
        $user = array(
            'nom' => $nom,
            'prenom' => $prenoms,
            'email' => $email,
            'mdp' => $password,
            'dtn' => $dtn,
            'poids' => $poids,
            'sexe' => $sexe,
            'taille' => $taille

        );


//
////           $query = $this->db->insert('user', $user); // Remplacez 'utilisateurs' par le nom de votre table
//                    $this->db->affected_rows();
        $this->db->insert('user',$user);
        //  $this->User_model->insererUser($user);


        $idUser = $this->Inscription_model->getLastUserId();

        $objPm = array(
            'idUser'=>$idUser,
            'montant'=>30000
        );
        $this->db->insert('porteMonnaie', $objPm);
        if (!empty($objectif)) {
            foreach ($objectif as $objectifs) {
                $obj = array(
                    'idObjectif' => $objectifs,
                    'idUser' => $idUser
                );
                $this->db->insert('userObjectif', $obj);
            }
        }

        redirect(base_url('Login_controller'));
        $this->load->view('front-office/Login_view'); // Remplacez 'login_success' par le nom de votre page de succès

    }
}