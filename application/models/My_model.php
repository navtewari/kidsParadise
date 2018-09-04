<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    function get_placement(){        
        $this->db->order_by('NAME', 'asc');
        $this->db->from('placement');
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function get_ten_placement(){        
        $this->db->order_by('NAME', 'asc');
        $this->db->from('placement');
        $this->db->limit('10');
        $query = $this->db->get();
        
        return $query->result();
    }
}
