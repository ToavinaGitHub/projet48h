<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Code_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Code_model');

    }

    public function index()
    {
        $row = $this->Code_model->getAll();

        $r['all'] = $row;

        $idUser = $_SESSION['user']->idUser;

        $pm = $this->Code_model->getPorteMonnaieBy($idUser);

        $r['pm'] = $pm;


        $this->load->view('front-office/Code_view',$r);
    }

    public function insertVola()
    {
        $code = $_POST['code'];
        $idUser = $_SESSION['user']->idUser;
        echo "hah";
        $row = $this->Code_model->getAll();
        $r['all'] = $row;
        if($this->Code_model->checkCode($code) == null)
        {
            $r['erreur']="Code non existante";
            $this->load->view('front-office/Code_view',$r);
        }else{
            $c = $this->Code_model->getCode($code);
            $pm = $this->Code_model->getPorteMonnaieBy($idUser);

            if($c['etat']==0){
                $r['erreur']="Code déja utilisé";
                $this->load->view('front-office/Code_view',$r);
            }
            else{

                $data = array(
                    "idUser"=>$idUser,
                    "montant"=>$pm['montant']+$c['montant']
                );

                $data2 = array(
                    "idCode"=>$c['idCode'],
                    "valeur"=>$c['valeur'],
                    "montant"=>$c['montant'],
                    "etat"=>0
                );
                var_dump($data);
                var_dump($data2);
                $this->Code_model->insertVola($idUser,$data,$c['idCode'],$data2);
            }
        }



    }





}