<?php
class Times_model extends CI_Model {

    # VALIDA USUÁRIO
    function getTime() {
        $this->db->where('nome', $this->input->post('nome-time')); 
        $query = $this->db->get('times'); 

        if ($query->num_rows == 1) { 
            return true; // RETORNA VERDADEIRO
        }
    }
    
    function  getTimes() {
        
        $query = $this->db->get('times'); 
        
        return $query;
    }
}