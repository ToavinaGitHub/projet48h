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



}