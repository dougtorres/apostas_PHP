<?php
class Campeonatos_model extends CI_Model {

    # VALIDA USUÁRIO
    function getCampeonatos() {
        $query = $this->db->get('campeonatos');

          return $query;
    }
   
}