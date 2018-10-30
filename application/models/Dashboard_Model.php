<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Model extends CI_Model {

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


    public function get_($table){
         $data = $this->db->get($table)->result_array();
         return $data;
    }

    public function get_products_cero(){
        $data = $this->db->where('stock', 0)->get('producto')->result_array();
        return $data;
    }


    public function get_products_cero_count(){
        $data = $this->db->where('stock', 0)->count_all_results('producto', false);
        return $data;
    }


    public function get_products_count(){
        $data = $this->db->where('stock !=', 0)->count_all_results('producto', false);
        return $data;
    }



    




    

   
}
