<?php

class Imc_model extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function calculateIMC($idUser) {
        $query = $this->db->get_where('user', array('idUser' => $idUser));
        $result = $query->row();

        if ($result) {
            $poids = $result->poids;
            $taille = $result->taille;

            if ($poids !== null && $taille !== null && $taille > 0) {
                $imc = $poids / ($taille * $taille);


                $resultat = '';

                if ($imc < 18.5) {
                    $resultat = 'Insuffisance pondérale';
                } elseif ($imc >= 18.5 && $imc <= 24.9) {
                    $resultat = 'Poids normal';
                } elseif ($imc >= 25 && $imc <= 29.9) {
                    $resultat = 'Surpoids';
                } elseif ($imc >= 30) {
                    $resultat = 'Obésité';
                }

                // Retourner le résultat
                return array(
                    'imc' => $imc,
                    'resultat' => $resultat
                );
            } else {
                return null; // Poids ou taille manquant
            }
        } else {
            return null; // Utilisateur introuvable dans la base de données
        }
    }

}