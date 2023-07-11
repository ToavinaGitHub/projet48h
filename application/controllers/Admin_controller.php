<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends  CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Inscription_model');
        $this->load->model('Admin_model');

    }
    public function index(){
        $this->load->view('back-office/Login_view');
    }

    public function listeUser(){
        $clients['user'] = $this->Admin_model->getAllUser();
        $this->load->view('back-office/Accueil_view',$clients);
    }
    public function login(){
        echo 1;
        $email = $this->input->post('email');
        $password = $this->input->post('mdp');

        $user = $this->Admin_model->checkLogin($email,$password);
        echo 2;
        $clients['user'] = $this->Admin_model->getAllUser();
        if ($user) {
            $_SESSION['admin']=1;
            $this->load->view('back-office/Accueil_view',$clients);
        } else {
            $message['erreur']="Email ou mot de passe incorrect";
            $this->load->view('back-office/Login_view',$message);
        }
    }
    public function listeClient(){
        $clients['user'] = $this->Admin_model->getAllUser();
        $this->load->view('back-office/Accueil_view',$clients);

    }

    public function Programme(){
        echo "ha";
        $clients = $this->Admin_model->getPrograms();
        echo "ha";
        $data['clients'] = $clients;
        var_dump($data);
        $this->load->view("back-office/Programme_view",$data);
    }

    public function  Regime(){
        $this->load->view("back-office/Regime_view");
    }
    public function  Recette(){
        $this->load->view("back-office/Recette_view");
    }


}