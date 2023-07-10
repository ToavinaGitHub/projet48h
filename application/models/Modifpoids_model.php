<?php
class Modifpoids_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function getUsers($id){
        $query=$this->db->get_where('user',array('idUser'=>$id));
        $row=$query->row_array();
        return $row;
    }
   
    public function update($poids,$id) {
        $query = $this->db->query('update user set poids=? where idUser = ?', array($poids,$id));
        
    }
    
    
}
?>