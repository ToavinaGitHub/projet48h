<?php
class DevenirGold_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function getLastPrix(){
        $query = $this->db->query("SELECT * FROM prixGold ORDER BY daty DESC LIMIT 1 ");
        return $query->row_array();
    }
    public function update($id) {
        $query = $this->db->query('update user set isGold=1 where idUser = ?', array($id));
    }


}
?>