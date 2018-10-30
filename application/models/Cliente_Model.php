<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_Model extends CI_Model {

	public function __construct()
    {

    	
    }

    public function search_($search){
      $data = $this->db->like('nombre', $search)->get('cliente')->result_array();
      return $data;
    }


    public function get_cliente($id){
      $data = $this->db->where('id_cliente', $id)->get('cliente')->result_array();
      return $data;
    }
    

   
}
