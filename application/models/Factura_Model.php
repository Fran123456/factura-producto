<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Factura_Model extends CI_Model {

	public function __construct()
    {

    	
    }

    public function get_categories(){
    	$data = $this->db->get('categoria')->result_array();
    	return $data;
    }

   

     public function delete_($id){
    	$this->db->where('id_categoria' , $id)->delete('categoria');
    }

    public function get_tipo(){
       $data = $this->db->get('modo_pago')->result_array();
       return $data;
    }


     public function get_factura($id){
       $data = $this->db->where('num_factura' , $id)->select('*')->from('factura')
       ->join('cliente', 'factura.cliente_id=cliente.id_cliente')
       ->join('modo_pago', 'factura.num_pago_id = modo_pago.num_pago')
       ->get()->result_array();
       return $data;
     }


      public function detalle($id)
      {
        $data = $this->db->where('factura_id' , $id)->select('*')->from('detalle')
        ->join('producto', 'detalle.producto_id=producto.id_producto')->get()->result_array();
        return $data;
      }

     public function add($table, $data)
     {
        $this->db->insert($table, $data);
     }

     public function  get_facturas()
     {
        //$data = $this->db->get('factura')->result_array();

        $data = $this->db->select('*')->from('factura')->join('cliente', 'factura.cliente_id=cliente.id_cliente')->get()->result_array();
        return $data;
     }

   
}
