<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');

    }

    public function index()
    {
        $this->load->view('front-office/Login_view');
    }

    public function checkUserLogin(){
        $email = trim($_POST["email"]);
        $mdp = trim($_POST["password"]);

        if($this->User_model->checkLogin($email,$mdp))
        {
            $this->load->view('front-office/Accueil_view');
        }else{
            $message['erreur']="Email ou mot de passe incorrect";
            $this->load->view('front-office/Login_view',$message);
        }
    }


}