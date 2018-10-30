<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_Model extends CI_Model {

	public function __construct()
    {

    	
    }

    public function get_categories(){
    	$data = $this->db->get('categoria')->result_array();
    	return $data;
    }

    public function add_($data){
    	$this->db->insert('categoria', $data);
    }

     public function delete_($id){
    	$this->db->where('id_categoria' , $id)->delete('categoria');
    }

   
}
