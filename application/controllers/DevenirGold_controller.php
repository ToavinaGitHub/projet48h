<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DevenirGold_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Code_model');
        $this->load->model('DevenirGold_model');
    }

    public function index()
    {
        echo "ha";
        $row = $this->Code_model->getAll();

        $r['all'] = $row;
        echo "ha";
        $idUser = $_SESSION['user']->idUser;

        $pm = $this->Code_model->getPorteMonnaieBy($idUser);

        $r['pm'] = $pm;

        var_dump($r);

        $r['prixGold'] = $this->DevenirGold_model->getLastPrix();

        $this->load->view('front-office/DevenirGold_view',$r);
    }

    public function insertVola()
    {

        $code = $_POST['code'];
        $idUser = $_SESSION['user']->idUser;
        echo "hah";
        $row = $this->Code_model->getAll();
        $r['all'] = $row;
        if ($this->Code_model->checkCode($code) == null) {
            $r['erreur'] = "Code non existante";
            $this->load->view('front-office/Code_view', $r);
        } else {
            $c = $this->Code_model->getCode($code);
            $pm = $this->Code_model->getPorteMonnaieBy($idUser);

            if ($c['etat'] == 0) {
                $r['erreur'] = "Code déja utilisé";
                $this->load->view('front-office/Code_view', $r);
            } else {

                $data = array(
                    "idUser" => $idUser,
                    "montant" => $pm['montant'] + $c['montant']
                );

                $data2 = array(
                    "idCode" => $c['idCode'],
                    "valeur" => $c['valeur'],
                    "montant" => $c['montant'],
                    "etat" => 0
                );

                $this->Code_model->insertVola($idUser, $data, $c['idCode'], $data2);
            }
        }
    }
        public function setGold()
        {
            $row = $this->Code_model->getAll();
            $idUser = $_SESSION['user']->idUser;
            $pm = $this->Code_model->getPorteMonnaieBy($idUser);

            $r['pm'] = $pm;

            $pm = $this->Code_model->getPorteMonnaieBy($idUser);
            $prixGold = $this->DevenirGold_model->getLastPrix();
            $r['all'] = $row;
            $r['prixGold'] = $this->DevenirGold_model->getLastPrix();
            if($prixGold['prix'] > $pm['montant']){
                $r['erreur']="Montant tsy ampy";
                $this->load->view('front-office/DevenirGold_view',$r);
            }else{
                $obj = array(
                    'idUser'=>$idUser,
                    'montant'=> $pm['montant']-$prixGold['prix']
                );
                $this->DevenirGold_model->update($idUser);
                $this->db->update('porteMonnaie', $obj,array('idUser' => $idUser));
                $this->load->view('front-office/DevenirGold_view',$r);
            }

        }
        

}