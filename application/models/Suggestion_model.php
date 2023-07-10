<?php
class Suggestion_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function checkLogin($email,$mdp){
        $query = $this->db->get_where('user',array('email'=>$email,'password'=>$mdp));
        $row = $query->row();
        if($row==null)
        {
            return false;
        }
        return true;
    }
    public function getUserWith($email,$mdp){
        $query = $this->db->get_where('user',array('email'=>$email,'password'=>$mdp));
        $row = $query->row();
        return $row;
    }

    public function getRegimeBy($poid, $sexe)
    {
        // Requête pour récupérer le régime le plus proche des paramètres
        $this->db->select('*');
        $this->db->from('regime');
        $this->db->where('poids <=', $poid);
        $this->db->where('sexe', $sexe);
        $this->db->order_by('poids', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();

        // Vérifier s'il y a un résultat
        if ($query->num_rows() > 0) {
            // Récupérer le régime trouvé
            return $query->row();
        } else {
            // Aucun régime correspondant trouvé
            return null;
        }
    }

}
?>