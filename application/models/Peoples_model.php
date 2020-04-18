<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Peoples_model extends CI_Model {

    public function getAllPeoples()
    {
        return $this->db->get('peoples')->result_array();        
    }

    public function getPeoples($limit, $start)
    {
        return $this->db->get('peoples', $limit, $start)->result_array();        
    }

    public function countPeoples()
    {
        return $this->db->get('peoples')->num_rows();        
    }
}

/* End of file Peoples_model.php */
