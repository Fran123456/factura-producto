<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_Model extends CI_Model {

	public function __construct()
    {

    	
    }

    public function get_products(){
    	$data = $this->db->select('producto.nombreP , producto.precio, producto.stock, producto.id_producto, categoria.nombre')->from('producto')->join('categoria', 'categoria.id_categoria = producto.categoria_id')->get()->result_array();
    	return $data;
    }

    public function get_products_simple(){
        $data = $this->db->where('stock !=', '0' )->get('producto')->result_array();
        return $data;
    }

    public function get_product_where($id){
         $data = $this->db->where('id_producto', $id)->get('producto')->result_array();
        return $data;
    }


    public function get_product($id){
        $data = $this->db->where('id_producto' , $id)->select('*')->from('producto')->join('categoria', 'categoria.id_categoria = producto.categoria_id')->get()->result_array();
        return $data;
    }

    public function add_($data){
    	$this->db->insert('producto', $data);
    }

     public function delete_($id){
    	$this->db->where('id_producto' , $id)->delete('producto');
    }

     public function edit_($data, $id){
       $this->db->where('id_producto' , $id)->update('producto', $data);
    }

   
}
