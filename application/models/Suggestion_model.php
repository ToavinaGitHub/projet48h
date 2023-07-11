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
    public function getActiviteBy($poid, $sexe)
    {
        // Requête pour récupérer le régime le plus proche des paramètres
        $this->db->select('*');
        $this->db->from('actSport');
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
    public function livrer($data){
        $this->db->insert('programmeUser',$data);
    }
    public function getRecettesByRegime($idRegime) {
        $this->db->select('r.*');
        $this->db->from('RegimeRecette rr');
        $this->db->join('recette r', 'r.idrecette = rr.idRecette');
        $this->db->where('rr.idRegime', $idRegime);

        $query = $this->db->get();
        return $query->result();
    }
    public function getExerciceByActSport($idAct) {
        $this->db->select('r.*,e.*');
        $this->db->from('actSport rr');
        $this->db->join('actExercice r', 'r.idActSport = rr.idActSport');
        $this->db->join('exercice e', 'r.idExercice = e.idExercice');
        $this->db->where('rr.idActSport', $idAct);

        $query = $this->db->get();
        return $query->result();
    }

}
?>