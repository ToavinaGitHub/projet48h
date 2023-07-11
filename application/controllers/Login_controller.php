<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Inscription_model');

    }

    public function index()
    {
        $this->load->view('front-office/Login_view');
    }
    public function Accueil(){
        $this->load->view('back-office/Accueil_view');
    }
    public function checkUserLogin(){
        $email = trim($_POST["email"]);
        $mdp = trim($_POST["password"]);

        if($this->User_model->checkLogin($email,$mdp))
        {
            $row =  $this->User_model->getUserWith($email,$mdp);
            $_SESSION['user'] = $row;

            echo $_SESSION['user']->idUser;
            $this->load->view('front-office/Accueil_view');
        }else{
            $message['erreur']="Email ou mot de passe incorrect";
            $this->load->view('front-office/Login_view',$message);
        }
    }
    public function inscription(){
      $data['objectifs'] = $this->Inscription_model->getAllObjectif();
        $this->load->view('front-office/Inscription_view',$data);
    }
    public function next(){
        $this->load-> view('front-office/Next_view');
    }
}