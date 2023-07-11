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

        $email = $this->input->post('email');
        $password = $this->input->post('mdp');
        $user = $this->Admin_model->checkLogin($email,$password);
        $clients['user'] = $this->Admin_model->getAllUser();
        if ($user) {

           $this->load->view('back-office/Accueil_view',$clients);

        } else {
            redirect('login');

        }
    }

    public function Programme(){
        $clients = $this->Admin_model->getPrograms();
        $data['clients'] = $clients;
        $this->load->view("back-office/Programme_view",$data);
    }

    public function  Regime(){
        $this->load->view("back-office/Regime_view");
    }
    public function  Recette(){
        $this->load->view("back-office/Recette_view");
    }


}