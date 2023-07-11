<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suggestion_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Suggestion_model');
        $this->load->model('Code_model');

    }

    public function index()
    {
        $this->load->view('front-office/Suggestion_view');
    }

    public function getSuggestion(){
        $poid = 5;
        $sexe = 1;

        $row = $this->Suggestion_model->getRegimeBy($poid, $sexe);

        echo $row->idRegime;
    }
    public function livrer()
    {
        echo "ha1";
        $idRegime = $_GET['idRegime'];
        $idActSport = $_GET['idActSport'];
        $idUser = $_SESSION['user']->idUser;

        $user = $this->db->get_where('user',array('idUser'=>$idUser))->row_array();
        $poids = $user['poids'];

        $daty = new DateTime();
        $date = $daty->format('Y-m-d');
        echo "haha2" ;
        $data = array(
            'idPro'=>null,
            'idUser'=>$idUser,
            'idRegime'=>$idRegime,
            'idActSport'=>$idActSport,
            'poidsInit'=>$poids,
            'daty'=>$date
        );
        echo "haha3";
        $pm = $this->Code_model->getPorteMonnaieBy($idUser);
        echo "haha4";
        $regime = $this->db->get_where('regime',array('idRegime'=>$idRegime))->row_array();

        $mt = $regime['montant'];
        echo "haha5";
        if($user['isGold']==1){
            $mt = $regime['montant']-(($regime['montant']*15)/100);
        }
        echo "haha6";

        if($pm['montant']< $mt){
            redirect(base_url("Code_controller"));
        }else{
            $objPm = array(
                'idUser'=>$idUser,
                'montant'=>$pm['montant']-$mt
            );
            $this->db->update('porteMonnaie',$objPm,array('idUser'=>$idUser));
            $this->Suggestion_model->livrer($data);
            redirect(base_url('Suggestion_controller'));
        }

    }

    public function afficherMonRegime(){
        $idUser = $_SESSION['user']->idUser;
        $pro = $this->db->get_where('programmeUser',array('idUser'=>$idUser))->row_array();

        $regime = $this->db->get_where('regime',array('idRegime'=>$pro['idRegime']))->row_array();
        $actSport = $this->db->get_where('actSport',array('idActSport'=>$pro['idActSport']))->row_array();

        $recettes = $this->Suggestion_model->getRecettesByRegime($regime['idRegime']);
        $exercices = $this->Suggestion_model->getExerciceByActSport($actSport['idActSport']);

        $r['recettes'] = $recettes;
        $r['exercices'] = $exercices;

        $r['regime'] = $regime;
        $r['pro'] = $pro;

        $this->load->view('front-office/MonRegime_view',$r);
    }


}